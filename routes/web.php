<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/ola', function () {
    echo 'Olá Bruno';
});
*/

//rota para exibir a lista de séries
Route::get('/series', function(){

});