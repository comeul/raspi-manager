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

    if ($exit_code == 0) {
        return "Cool. Check la télé, mais ça devrait être ok!";
    } else {
        return "Hum... Y'a peut-être eu une erreur, check la télé pour être certain.";
    }
});

Route::get('/reboot-pi', function () {
    $exit_code = \Illuminate\Support\Facades\Artisan::call('raspi:reboot');

    if ($exit_code == 0) {
        return "Cool. Donne moi quelques secondes, ça devrait repartir!";
    } else {
        return "Hum... Y'a peut-être eu une erreur, check sur la télé pour être certain.";
    }
});

Route::get('/poweroff-pi', function () {
    $exit_code = \Illuminate\Support\Facades\Artisan::call('raspi:poweroff');

    if ($exit_code == 0) {
        return "Cool. Donne moi quelques secondes, et c'est fermé!";
    } else {
        return "Hum... Y'a peut-être eu une erreur, check sur la télé pour être certain.";
    }
});
