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
    public function index($step = 1)
    {
        $page;

        $user = Auth::user();
        $moodTypes = MoodType::all();

		switch ($step) {

			case 1:
                return view('you.setup.1', [
                    'user' => $user,
                    'moods' => $moodTypes,
                ]);
				break;

            case 2:
                $userMoods = session('moods');

                foreach ($userMoods as $mood) {
                    $mood_ids[] = $mood['mood_type'];
                }

                $moods = MoodType::whereIn('id', $mood_ids)->get();

                return view('you.setup.2', [
                    'user' => $user,
                    'moods' => $moods,
                ]);

				break;

            case 3:
                return view('you.setup.3', [
                    'user' => $user,
                ]);
                break;
		}

		return $page;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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

            case 1:


                $validatedData = $request->validate([
                    'moods' => 'required|min:1',
                ]);

                foreach ($request->moods as $type) {
                    $moods[] = array(
                        'mood_type' => $type
                    );
                }

                session(['moods' => $moods]);
                return redirect()->route('you.setup', ['step' => 2]);
                break;

            case 2:
                foreach ($request->moods as $mood => $target) {
                    $moods[] = array(
                        'mood_type' => $mood,
                        'target' => $target
                    );
                }

                session(['moods' => $moods]);
                return redirect()->route('you.setup', ['step' => 3]);
                break;

            case 3:
                $user = Auth::user();

                $user->settings([
                    'periodicity' => intval($request->occurance),
                    'moods' => json_encode(session('moods')),
                    'hasFinishedSetup' => true,
                ]);



                return redirect()->route('you');
                break;

        }


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
