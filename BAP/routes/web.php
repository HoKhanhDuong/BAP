<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;

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

Route::get('/', function () {
    return view('register');

});
//Route::post('/register', 'AuthController@AuthController')->name('Register');
Route::post('/register', [AuthController::class, 'Register'])->name('Register');
Route::get('/register', [AuthController::class, 'getRegister'])->name('getRegister');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin');
Route::get('/home', [BookController::class, 'ListBook'])->name('ListBook');
