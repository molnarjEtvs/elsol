<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\elsoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/valami',function(){
    return view("valami");
});

Route::get('/elso',[elsoController::class,"elso"]);