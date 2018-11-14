<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hall extends Controller
{
  public function newview(Request $request)
  {
    dd($request);
    $halls = \App\Halls::find($request->input('id'));
    $halls->name = $request->input('name');
    $halls->save();
      return view('home', [
        "halls" => $halls,
      ]);
  }
}
