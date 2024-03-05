<?php

use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\NuevoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', HomeController::class)->name('home');

Route::get('/dashboard', [PostController::class, 'index'])->name('dashboard');

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts/create', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/nuevo', NuevoController::class)->name('nuevo');
// Route::get('/posts/imagenes', [ImagenController::class, 'index'])->name('imagenes.index');
Route::post('/posts/imagenes', [ImagenController::class, 'store'])->name('imagenes.store');
// // Route::get('/{user:username}/posts/{post}', [PostController::class, 'show'])->name('posts.show');
// Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
// Route::post('/{user:username}/posts/{post}', [ComentarioController::class, 'store'])->name('comentario.store');


// //Like de fotos
// Route::post('/posts/{post}/likes', [LikeController::class, 'store'])->name('posts.likes.store');
// Route::delete('/posts/{post}/likes', [LikeController::class, 'destroy'])->name('posts.likes.destroy');

// Route::get('/{user:username}', [PostController::class, 'index'])->name('posts.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
