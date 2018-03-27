<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Javascript;

class HomeController extends Controller
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
#        dd(Auth::user()['email']);
#        dd(Auth::user());
#        Javascript::put([
#            'jibba' => 'jabba'
#        ]);
        return view('home');
    }
}
