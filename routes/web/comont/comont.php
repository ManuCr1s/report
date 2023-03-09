<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComontController;
Route::controller(ComontController::class)->group(function(){
    Route::get('/','index')->middleware('guest');
    Route::get('/login','index')->middleware('guest')->name('login');
});