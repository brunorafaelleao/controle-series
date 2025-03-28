<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
  public function index(){
    $series = [
      'Punisher',
      'Lost',
      'Grey\'s Anatomy',
      'Reacher'
    ];


    return view('series.index')->with('series', $series);


    // return view('listar-series', ['series' => $series]);
    // return view('listar-series',compact('series'));
    // compact('series') é o mesmo que ['series' => $series]


  }
}
