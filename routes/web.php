<?php

use App\Http\Controllers\BasicController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/service', function () {
//     return view('service');
// });


Route::get('/', [BasicController::class, 'index'])->name('home2');


Route::get('/about', [BasicController::class, 'about'])->name('about');


Route::get('/service', [BasicController::class, 'service'])->name('service');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/course', [App\Http\Controllers\CourseController::class, 'index'])->name('index');


//route untuk akses semua controller

Route::resource('/courses', CourseController::class)->middleware('auth');
