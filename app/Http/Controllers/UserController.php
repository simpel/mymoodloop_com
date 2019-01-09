<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\ValuationType;

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
		return redirect()->route('setup');
    }

	/**
     * Setup flow for the user
     *
     * @return \Illuminate\Http\Response
     */

	public function setup($step = 1)
    {
		$page;

		switch ($step) {
			case 2:
				$page = $this->step2();
				break;
			case 1:
			default:
				$page = $this->step1();
				break;
		}

		return $page;
    }

	private function step1() {
		$user = Auth::user();
		$valuationTypes = ValuationType::all();

		return view('you.setup.1', [
			'user' => $user,
			'types' => $valuationTypes,
		]);
	}

	private function step2() {
		$user = Auth::user();

		return view('you.setup.2', [
			'user' => $user,
		]);
	}

}
