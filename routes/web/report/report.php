<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
Route::controller(ReportController::class)->group(function(){
    //Retorno de vistas
    Route::get('/reporte','index')->middleware('guest')->name('report');
    Route::post('/dates','store')->middleware('guest')->name('dates');
    Route::get('/datatable','create')->name('datatable');
});