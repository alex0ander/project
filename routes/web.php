<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::get('/' , [HomeController::class , 'list']);

Route::get('user/{id}/info' , [UserController::class , 'userInfo']);
Route::get('user/{id}/update' , [UserController::class , 'userUpdate']);
Route::get('user/create' , [UserController::class , 'userCreate']);
Route::get('user/{id}/delete' , [UserController::class , 'userDelete']);