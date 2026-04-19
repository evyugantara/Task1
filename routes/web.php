<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StylingController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/styling', [StylingController::class, 'index']);

use App\Models\User;

Route::get('/test', function () {
    return User::with('loans.details.returnData')->get();
});