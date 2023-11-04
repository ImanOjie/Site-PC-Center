<?php

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

//home
Route::get('/',[App\Http\Controllers\HomeController::class,'home'])->name('home');

//purchases
Route::middleware('auth')->get('/purchases',[App\Http\Controllers\HomeController::class,'purchases'])->name('purchases');

//login/register
Route::get('/login_register',[App\Http\Controllers\HomeController::class,'login_register'])->name('login_register');
Route::post('/register',[App\Http\Controllers\UserController::class,'register'])->name('register');
Route::post('/login',[App\Http\Controllers\UserController::class,'login'])->name('login');

//products menu
Route::get('/motherboard',[App\Http\Controllers\HomeController::class,'motherboard'])->name('motherboard');
Route::get('/graphic',[App\Http\Controllers\HomeController::class,'graphic'])->name('graphic');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
