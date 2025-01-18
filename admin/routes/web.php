<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormController;
use App\Http\Middleware\CustomAuth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [AdminController::class, 'login']); 

Route::group(["middleware" => [CustomAuth::class]], function () {

    Route::get('/logout', [AdminController::class, 'logout']);  

    Route::get('/index', [FormController::class, 'index']);
    Route::get('forms/contacts', [FormController::class, 'contact_forms']);  
    Route::get('forms/app-development', [FormController::class, 'app_development_forms']);  
    Route::get('forms/web-development', [FormController::class, 'web_development_forms']);  

});
