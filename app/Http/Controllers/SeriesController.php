<?php
namespace App\Http\Controllers;

class SeriesController
{
  public function listarSeriess(){
    $series = [
      'Punisher',
      'Lost',
      'Grey\'s Anatomy',
      'Reacher'
    ];

    $html = '<ul>';
    foreach($series as $serie){
      $html .= "<li>$serie</li>";
    }
    $html .= '</ul>';

    echo $html;


  }
}