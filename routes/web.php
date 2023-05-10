<?php

use Illuminate\Support\Facades\Route;

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

    $hello = "Hello World!";
    $text = "You are now using Laravel!";

    $data = [
        'hello' => $hello,
        'text' => $text
    ];

    return view('home', $data);

    // oppure:
    //return view('welcome', compact('hello', 'text'));
})->name('home');

Route::get('about-us', function () {
    return view('about-us', ['message' => "This is the about us section"]);
})->name('about-us');

Route::get('shop', function () {
    return view('shop', ['shop_message' => "This is our shop section"]);
})->name('shop');
