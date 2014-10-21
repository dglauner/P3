<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/practice', function() {
    echo App::environment();
});

Route::get('/', function()
{
	return View::make('faketext');
});

Route::get('/faketext', function()
{
	return View::make('faketext');
});

Route::get('/generateuser', function()
{
	return View::make('generateuser');
});

Route::post('/faketext', function()
{
    $input =  Input::all();
    print_r($input);
});

Route::post('/generateuser', function()
{
    $input =  Input::all();
    print_r($input);
});



