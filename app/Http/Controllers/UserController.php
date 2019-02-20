<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\MoodType;
use App\Mood;

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
        $userTypes = json_decode($user->settings('moods'));

        foreach ($userTypes as $userType) {

            $type = MoodType::where('id', "=", $userType->mood_type)->first();

            $data = array();
            $labels = array();

            foreach ($type->moods as $mood) {
                $data[] = $mood->value;
                $labels[] = $mood->created_at->timestamp;
            }

            $charts[] = [
                "type" => $type,
                "data" => json_encode($data),
                "target" => $userType->target,
                "labels" => json_encode($labels)
            ];
        }

        if($user->settings('hasFinishedSetup') == false) return redirect()->route('you.setup');

        return view('you.start', [
            'user' => $user,
            'charts' => $charts,
        ]);


    }




}
