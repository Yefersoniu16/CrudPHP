<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController2;
use App\Http\Controllers\CategoryController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function (){
    return view('home');
});

Route::get('/message', function (){
    return "Hello World";
});

Route::get('/message/{name}', function ($name){
    return "Hello " . $name;
});

Route::get('/message2/{name?}', function ($name = 'invitado'){
    return "Hello " . $name;
});

Route::get('/message3/{name?}', function ($name = 'invitado'){
    return view('message', ['name' => $name]);
});

Route::get('/message4/{name}/{nickname?}', function ($name, $nickname= 'invitado'){
    return view('message2', ['name' => $name, 'nickname' => $nickname]);
});

Route::get('/post', [PostController2::class, 'index']);


Route::resource( 'categories', CategoryController::class);




