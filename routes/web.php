<?php

use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\MessagesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/{uuid}', [HomeController::class, 'show'])->name('show');

Route::resource('home', HomeController::class);
Route::resource('messages', MessagesController::class);

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);
