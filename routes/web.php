<?php

use \App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [Controller::class,'index'])->name('home');
Route::post('/certificates/create', [Controller::class,'create'])->name('create');
Route::get('/certificates/{id}', [Controller::class,'getCertificate'])->name('getCertificate');
Route::get('/certificates/create/pdf/{id}', [Controller::class,'createPdf'])->name('createPdf');

