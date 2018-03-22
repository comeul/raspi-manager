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

Route::get('/toggle-hdmi', function () {
    $exit_code = \Illuminate\Support\Facades\Artisan::call('raspi:toggle-tv');

    dd($exit_code);
});
