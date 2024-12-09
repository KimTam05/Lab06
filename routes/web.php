<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

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


// Route::get('/session/get', [SessionController::class,'getSessionData'])->name('session.get');
// Route::get('/session/set', [SessionController::class,'storeSessionData'])->name('session.set');
// Route::get('/session/delete', [SessionController::class,'deleteSessionData'])->name('session.del');


#Account
Route::get('/login', [AccountController::class,'login'])->name('login');
Route::post('/login', [AccountController::class,'check_login'])->name('check_login');

Route::get('/home', [AccountController::class,'home'])->name('home');