<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    echo "Hello World";
});

Route::get('/name/{AlMaarip}', function ($AlMaarip) {
    return "Hello " . $AlMaarip;
});

Route::get('/names/{Al}', function ($Al) {
    return "Hello " . $Al;
})->where('Al', '[A-Za-z]+');

Route::get('/name/{name}/{nrp}', function  ($name, $nrp) {
    return  $name. " Al Maarip " . $nrp. " 190914018"; 
});

Route::get('my-academic/{course}/{task}/{quiz}/{mid_term}/{final}','StudentController@myCourse');


