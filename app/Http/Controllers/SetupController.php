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

		switch ($step) {

            case 'define_types':
            case 'set_targets':
            case 'set_periodicity':

                $user_mood_type_ids= json_decode($user->settings('mood_type_id'));
                $mood_types = MoodType::whereIn('id', $user_mood_type_ids)->get();

                return view('you.setup.'.$step, [
                    'user' => $user,
                    'mood_types' => $mood_types,
                ]);

                break;
            default:

                $mood_types = MoodType::all();
                return view('you.setup.choose_types', [
                    'user' => $user,
                    'mood_types' => $mood_types,
                ]);
				break;
		}
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
            case 'define_types':
                $next = $this->define_types($request);
                break;
            case 'set_targets':
                $next = $this->set_targets($request);
                break;
            case 'set_periodicity':

                Auth::user()->settings([
                    'periodicity' => intval($request->occurance),
                    'setupStep' => 'set_periodicity',
                    'setupIsDone' => true,
                ]);

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

        return 'define_types';
    }

    private function define_types(Request $request) {

        $user = Auth::user();

        foreach ($request->mood_type_description as $type) {
            $descriptions[$type['id']] = $type['description'];
        }

        $user->settings([
            'mood_type_description' => json_encode($descriptions),
            'setupStep' => 'define_types'
        ]);

        return 'set_targets';
    }

    private function set_targets(Request $request) {

        $user = Auth::user();

        foreach ($request->mood_type_target as $type) {
            $targets[$type['id']] = $type['target'];
        }

        $user->settings([
            'mood_type_target' => json_encode($targets),
            'setupStep' => 'set_targets'
        ]);

        return 'set_periodicity';
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
