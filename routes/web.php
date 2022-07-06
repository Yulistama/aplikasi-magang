<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landing\LandingController;
use App\Http\Controllers\admin\AdminController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LandingController::class, 'landing'])->name('landing');
Route::get('/info-magang', [LandingController::class, 'infomagang'])->name('infomagang');

Route::get('/dashboard-admin', [AdminController::class, 'dashboard'])->name('dashboard');
