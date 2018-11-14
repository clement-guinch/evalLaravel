<?php

namespace App\Http\Controllers;
use \App\Halls;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $halls = Halls::all();
        return view('home', [
          "halls" => $halls,
        ]);
    }
}
