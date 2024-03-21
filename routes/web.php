<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControllerEloquent;
use App\Http\Controllers\UserControllerQueryBuilder;
use App\Models\User;

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

Route::resource('eloquent', UserControllerEloquent::class)->names('eloquent');
Route::resource('query-builder', UserControllerQueryBuilder::class)->names('query-builder');

