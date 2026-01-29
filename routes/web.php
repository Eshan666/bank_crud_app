<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('inputForm');
});


Route::get('input-form',[DataController::class,'inputForm'])->name('inputForm');
Route::post('store-data',[DataController::class,'storeData']);
Route::get('display-data',[DataController::class,'displayData'])->name('displayData');

Route::post('update-data/{id}',[DataController::class,'updateData'])->name('update-data');
Route::post('delete-data/{id}',[DataController::class,'deleteData'])->name('delete-data');
Route::get('updateForm/{id}',[DataController::class,'updateForm'])->name('update-form');
Route::post('bulkDelete',[DataController::class,'bulkDelete'])->name('bulkDelete');

//Authentication

Route::get('register-form',[UserController::class,'registerForm'])->name('registerForm');
Route::post('process-registration',[UserController::class,'processRegistration'])->name('processRegistration');

Route::get('login-form',[UserController::class,'loginForm'])->name('loginForm');
Route::post('process-login',[UserController::class,'processLogin'])->name('processLogin');


