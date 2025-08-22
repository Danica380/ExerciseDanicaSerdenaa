<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EController;
use App\Http\Controllers\exerControllers;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ebills', [EController::class, 'getbasebill']);


Route::get('/exercise', [exerController::class, 'index']);

Route::get('/greet', function(){
$name = request('name'); //Elsie
$age = request('age'); // 25
return "Hello $name, age $age";
});

Route::get('/user/{name}/{age}', function ($name,$age){
    return "Name: $name, Age: $age";
});