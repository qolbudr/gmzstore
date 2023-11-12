<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WebController;

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

Route::get('/', [WebController::class, 'index']);
Route::get('register', [AuthController::class, 'register']);
Route::get('register/theme', [AuthController::class, 'theme']);
Route::get('register/success', [AuthController::class, 'success']);
Route::get('register/create', [AuthController::class, 'create_site']);
Route::post('auth/register', [AuthController::class, 'auth_register']);
Route::post('auth/theme', [AuthController::class, 'auth_theme']);