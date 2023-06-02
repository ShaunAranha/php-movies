<?php

use App\Http\Controllers\ActorsController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SWPersonController;


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



Route::get('/swactors', [SWPersonController::class, 'index']);

Route::get('/show-actors', [ActorsController::class, 'index']);
