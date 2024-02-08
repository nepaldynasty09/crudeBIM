<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcomController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/admin/dashboard',[EcomController::class,'index']);

Route::get('/admin/dashboard/createproduct',[EcomController::class,'create'])->name('createtheproduct');
Route::post('/post',[EcomController::class,'store'])->name('saveproduct');
Route::get('/showproduct',[EcomController::class,'index'])->name('displayproduct');
Route::get('/editproduct/{id}',[EcomController::class,'edit'])->name('edittheproduct');
Route::get('/deleteproduct/{id}',[EcomController::class,'destroy'])->name('deletetheproduct');
Route::post('/updateproduct/{id}',[EcomController::class,'update'])->name('updatetheproduct');
