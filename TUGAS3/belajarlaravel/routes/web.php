<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementUserController;

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
//Route::get('/', [ManagementUserController::class, 'index']);

//Route::resource('user', [ManagementUserController::class, 'user']);  

Route::get('/user',[ManagementUserController::class, 'index']);
//Route::get('/create',[ManagementUserController::class, 'create']);
//Route::get('/store',[ManagementUserController::class, 'store']);
//Route::get('/show',[ManagementUserController::class, 'show']);
//Route::get('/edit',[ManagementUserController::class, 'edit']);
//Route::get('/update',[ManagementUserController::class, 'update']);
//Route::get('/destroy',[ManagementUserController::class, 'destroy']);

//Route::get('/home', function(){return view("home");});

//Route::get('/', function(){return view("welcome");});

//Route::group(['namespace' => 'frontend'], function(){ Route::resource('home', 'HomeController');});