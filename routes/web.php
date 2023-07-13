<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'welcome')->name('home');
Route::view('about','about')->name('about');
Route::get('blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('blog/{show}', [BlogController::class, 'show'])->name('blog.show');
Route::view('contact', 'contact')->name('contact');
// Route::get('/', [BlogController::class, 'index'])->name('home');
