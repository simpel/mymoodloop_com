<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\MoodType;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$user = Auth::user();
        $targets = json_decode($user->settings('moods'));

        foreach ($targets as $target) {
            $ids[] = $target->mood_type;
        }

        $moods = MoodType::whereIn('id', $ids)->get();


        if($user->settings('hasFinishedSetup') == false) return redirect()->route('you.setup');

        return view('you.start', [
            'user' => $user,
            'moods' => $moods,
        ]);


    }




}
