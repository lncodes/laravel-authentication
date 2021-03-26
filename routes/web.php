<?php

use App\Http\Controllers\AuthController;
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

//Root route
Route::get('/', function () {
    return redirect()->route('home');
});

//Homepage route
Route::view('home', 'welcome')->name('home')->middleware('auth');

//Authentication route
Route::name('auth.')->group(function()
{
    Route::get('login', [AuthController::class, 'index'])->name('index')->middleware('guest');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('login/check', [AuthController::class, 'login'])->name('login');
});