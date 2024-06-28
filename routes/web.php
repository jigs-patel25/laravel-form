<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ServiceController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'] )->name('tea.home');
Route::get('/about', [AboutController::class, 'index'] )->name('tea.about');
Route::get('/contact', [ContactController::class, 'index'] )->name('tea.contact');
Route::get('/service', [ServiceController::class, 'index'] )->name('tea.service');
// Route::get('/index',function(){
//     return view('index');
// });
