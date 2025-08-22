<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function index()
    {
        $title = "Welcome to Laravel";
        $users = ["John", "Jane", "Mark"];
        return view('exercise', compact('title', 'users')); //becomes a blade variable


        Route::post('/user', function(){
    $name = request('name'); //or request()->input('name')
    $age = request('age');
    return compact('name', 'age');
        });
    }
}