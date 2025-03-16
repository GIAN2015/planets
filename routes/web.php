<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\postcontroller;
use App\Http\Controllers\RegisterController;
use App\Models\planets;
use App\Models\Post;

// <!--get--!>
Route::get('/', [homecontroller::class, 'index'])->middleware('auth')->name('home');
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/lista', [postController::class, 'lista'])->name('post.lista');
Route::get('/lista/{id}', [postcontroller::class, 'show'])->name('post.show');
Route::get('/create', [postcontroller::class, 'create']);
Route::get('/lista/{id}/edit', [postcontroller::class, 'edit'])->name('post.edit');
Route::get('/', [PostController::class, 'index'])->name('post.home');
Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
Route::get('/login', [RegisterController::class, 'showLogin'])->name('login');




// <!--Post--!>
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [RegisterController::class, 'login']);
Route::post('/logout', [RegisterController::class, 'logout'])->name('logout')->middleware('auth');
Route::Post('formulario', [PostController::class, 'formulario'])->name('post.formulario');
Route::post('/post-formulario', [PostController::class, 'store'])->name('post.formulario');
// <!--delete--!>
Route::delete('/lista/{id}', [postcontroller::class, 'destroy'])->name('post.destroy');

// <!--Put--!>
Route::put('/lista/{id}', [postcontroller::class, 'update'])->name('post.update');
