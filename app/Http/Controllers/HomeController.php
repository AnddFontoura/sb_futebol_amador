<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends HelperController
{
    public const USER_TYPE_PLAYER = 1;
    public const USER_TYPE_FOOTBALL_COURT = 2;

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
        switch(Auth::user()->user_type_id) {
            case self::USER_TYPE_PLAYER:

                return view('user.dashboard');
                break;

            case self::USER_TYPE_FOOTBALL_COURT:

                return view('court.dashboard');
                break;
        }
    }
}
