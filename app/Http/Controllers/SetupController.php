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
        $mood_types = MoodType::all();

		switch ($step) {

			case 1:
                return view('you.setup.1', [
                    'user' => $user,
                    'mood_types' => $mood_types,
                ]);
				break;

            case 2:
                $user_mood_types = json_decode($user->settings('mood_types'));

                foreach ($user_mood_types as $types) {
                    $mood_type_ids[] = $types->id;
                }

                $mood_types = MoodType::whereIn('id', $mood_type_ids)->get();

                return view('you.setup.2', [
                    'user' => $user,
                    'mood_types' => $mood_types,
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
        $user = Auth::user();


        switch ($step) {

            case 1:


                $validatedData = $request->validate([
                    'mood_types' => 'required|min:1',
                ]);

                foreach ($request->mood_types as $id) {
                    $mood_types[] = array(
                        'id' => $id
                    );
                }


                $user->settings([
                    'mood_types' => json_encode($mood_types),
                    'setupStep' => 2
                ]);

                return redirect()->route('you.setup', ['step' => 2]);
                break;

            case 2:



                foreach ($request->mood_types as $type) {


                    $mood_types[] = array(
                        'id' => $type['id'],
                        'settings' => [
                            'description' => $type['description'],
                            'target' => $type['target'],
                        ]
                    );
                }

                $user->settings([
                    'mood_types' => json_encode($mood_types),
                    'setupStep' => 3
                ]);

                return redirect()->route('you.setup', ['step' => 3]);
                break;

            case 3:

                $user->settings([
                    'periodicity' => intval($request->occurance),
                    'setupStep' => 0,
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
