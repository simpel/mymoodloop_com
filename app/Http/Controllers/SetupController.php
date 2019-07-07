<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\MoodType;

class SetupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($step = 'choose_types')
    {

        $user = Auth::user();


        if($step == 'choose_types') {
            $mood_types = MoodType::all();
        } else {
            $user_mood_type_ids= json_decode($user->settings('mood_type_id'));
            $mood_types = MoodType::whereIn('id', $user_mood_type_ids)->get();
        }

        return view('you.setup.'.$step, [
            'user' => $user,
            'mood_types' => $mood_types,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function messages()
    {
        return [
            'moods.required' => '☝️ You need to pick at least one mood to track.',
        ];
    }

    public function store(Request $request)
    {
        $step = $request->step;

        switch ($step) {
            case 'define_traits':
                $next = $this->define_traits($request);
                break;
            case 'set_periodicity':

                Auth::user()->settings([
                    'periodicity' => intval($request->occurance),
                    'setupStep' => 'set_periodicity',
                    'setupIsDone' => true,
                ]);
                $request->session()->flash('done', __("🎉 That's it! Your setup is now complete."));
                return redirect()->route('you');
                break;

            case 'choose_types':
            default:
                $next = $this->choose_types($request);
                break;
        }

        return redirect()->route('you.setup', ['step' => $next]);

    }

    private function choose_types(Request $request) {

        $user = Auth::user();

        $validatedData = $request->validate([
            'mood_types' => 'required|min:1',
        ]);

        foreach ($request->mood_types as $id) {
            $mood_types[] = $id;
        }

        $user->settings([
            'mood_type_id' => json_encode($mood_types),
            'setupStep' => 'choose_types'
        ]);

        return 'set_periodicity';
    }

    private function define_traits(Request $request) {

        $user = Auth::user();


        foreach ($request->mood_traits as $id) {
            $mood_traits[] = $id;
        }

        $user->settings([
            'mood_traits' => json_encode($mood_traits),
            'setupStep' => 'define_traits'
        ]);

        return 'set_periodicity';
    }


}
