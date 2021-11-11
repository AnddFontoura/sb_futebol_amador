<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class HomeController extends HelperController
{
    public const USER_TYPE_PLAYER = 1;
    public const USER_TYPE_FOOTBALL_CURT = 2;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard() {

        if(Auth::user()->type_id == self::USER_TYPE_PLAYER) {


            return view('user.dashboard');
        } if ( Auth::user()->type_id == self::USER_TYPE_FOOTBALL_COURT) {


            return view('court.dashboard');
        }
    }
}
