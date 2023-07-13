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
Route::get('blog', [BlogController::class, 'index'])->name('blogs.index');
Route::get('blog/create', [BlogController::class, 'create'])->name('blogs.create');
Route::post('blog', [BlogController::class, 'store'])->name('blogs.store');
Route::get('blog/{blog}', [BlogController::class, 'show'])->name('blogs.show');
Route::get('blog/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
Route::patch('blog/{blog}', [BlogController::class, 'update'])->name('blogs.update');
Route::delete('blog/{blog}', [BlogController::class, 'delete'])->name('blogs.delete');
Route::view('contact', 'contact')->name('contact');
// Route::get('/', [BlogController::class, 'index'])->name('home');
