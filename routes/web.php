<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data = [
        'content' => 'home/home/index'
    ];
    return view('home.layouts.wrapper', $data);
});


Route::get('/about', function(){
    $data = [
        'content' => 'home/about/index'
    ];
    return view('home.layouts.wrapper', $data);
});


Route::get('/product', function() {
    $data = [
        'content' => 'home/product/index'
    ];
    return view('home.layouts.wrapper', $data);
});


Route::get('/contact', function() {
    $data = [
        'content' => 'home/contact/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/customer', function() {
    $data = [
        'content' => 'home/customer/index'
    ];
    return view('home.layouts.wrapper', $data);
});

