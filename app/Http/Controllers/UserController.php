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

        // Check if setup is completed


        if(!$user->settings('setupIsDone')) {
            $setupStep = $user->settings('setupStep');
            return redirect(route('you.setup', ['step' => $setupStep]));
        }

        $trackable_types_id = json_decode($user->settings('mood_type_id'));
        $trackable_types_target = json_decode($user->settings('mood_type_target'));



        foreach ($trackable_types_id as $type_id) {

            $type = MoodType::where('id', "=", $type_id)->first();

            $data = array();
            $labels = array();

            foreach ($type->moods as $mood) {
                $data[] = $mood->value;
                $labels[] = $mood->created_at->timestamp;
            }



            $charts[] = [
                "type" => $type,
                "data" => json_encode($data),
                "target" => $trackable_types_target->$type_id,
                "labels" => json_encode($labels)
            ];
        }

        return view('you.start', [
            'user' => $user,
            'charts' => $charts,
        ]);


    }




}
