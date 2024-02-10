<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\OutilsController;
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


Route::get('/dash', [AccueilController::class, 'index']);
Route::get('/inscritpion', [InscriptionController::class, 'index']);
Route::get('/outils', [TestController::class, 'index']);

