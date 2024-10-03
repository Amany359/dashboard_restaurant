<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashbroad\Info0Controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::group([ 'as' =>'dashbraod.'], function () {
Route::get('/info0/index',[Info0Controller::class,'index'])->name('info0.index');

Route::get('/info0/create',[Info0Controller::class,'create'])->name('info0.create');
Route::post('/info0/store',[Info0Controller::class,'store'])->name('info0.store');
Route::get('/info0/{id}/edit',[Info0Controller::class,'edit'])->name('info0.edit');
Route::put('/info0/{id}/edit',[Info0Controller::class,'update'])->name('info0.update');
Route::get('/info0/{id}/delete',[Info0Controller::class,'destroy'])->name('info0.destroy');

//Route::prefix('dashbraod')->name('dashbraod.')->group(function () {
   // Route::get('/', [Info0Controller::class, 'index'])->name('index');





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});