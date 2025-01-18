<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// auth routes listed below
Route::group(['middleware' => ['auth:sanctum']], function () {    
});
