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

Route::get('/test', 'Academy@show');

// Academy - weekly prompts routes
// -> task: the identifier for which prompt we want to see
// -> implementer: whose implementation of the desired task we want
Route::get('academy/{task}/{implementer}', 'Academy@retrieve');
