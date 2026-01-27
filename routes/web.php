<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::get('/', function () {
    return view('inputForm');
});


Route::get('input-form',[DataController::class,'inputForm']);
Route::post('store-data',[DataController::class,'storeData']);
Route::get('display-data',[DataController::class,'displayData']);

Route::post('update-data/{id}',[DataController::class,'updateData'])->name('update-data');
Route::post('delete-data/{id}',[DataController::class,'deleteData'])->name('delete-data');
Route::get('updateForm/{id}',[DataController::class,'updateForm'])->name('update-form');

