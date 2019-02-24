<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
	protected function redirectTo(){
    	return route('you');
	}

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {

        if($provider == "facebook") {
            $providedUser = Socialite::driver($provider)->fields([
                'first_name',
                'last_name',
                'email',
                ])->stateless()->user();
        } else {
            $providedUser = Socialite::driver($provider)->stateless()->user();

        }

        // check if they're an existing user
        $user = User::where('email', $providedUser->email)->first();

        if(!$user){
            $user = new User;

            switch ($provider) {
                case 'google':
                    $user->firstname = $providedUser->user["given_name"];
                    $user->lastname = $providedUser->user["family_name"];
                    break;
                case 'facebook':
                    $user->firstname = $providedUser->user["first_name"];
                    $user->lastname = $providedUser->user["last_name"];
                    break;
            }

            $user->email = $providedUser->email;
    		$user->slug = str_slug($user->firstname.' '.$user->lastname, '-');
            $user->save();
            $user->sendEmailVerificationNotification();
        }



        switch ($provider) {
            case 'google':
                $user->google_id = $providedUser->id;
                $user->google_avatar = $providedUser->avatar;
                $user->google_avatar_original = $providedUser->avatar_original;
                break;

            case 'facebook':
                $user->facebook_id = $providedUser->id;
                $user->facebook_avatar = $providedUser->avatar;
                $user->facebook_avatar_original = $providedUser->avatar_original;
                break;
        }

        $user->save();
        auth()->login($user, true);

        return redirect(route('you'));

    }
}
