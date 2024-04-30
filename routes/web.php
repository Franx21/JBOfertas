<?php

use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\NotificacionController;
use App\Http\Controllers\NuevoController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\PopularController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TiendasController;
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

Route::get('editar-perfil', [PerfilController::class, 'index'])->middleware('auth')->name('perfil.index');
Route::post('editar-perfil', [PerfilController::class, 'store'])->middleware('auth')->name('perfil.store');

Route::get('/posts/nuevo', NuevoController::class)->name('nuevo');
Route::get('/posts/popular', PopularController::class)->name('popular');
Route::get('/nosotros', NosotrosController::class)->name('nosotros');
Route::get('/tiendas', TiendasController::class)->name('tiendas');

Route::get('/posts/create', [PostController::class, 'create'])->middleware(['auth', 'can:posts.create'])->name('posts.create');
Route::post('/posts/create', [PostController::class, 'store'])->middleware('auth')->name('posts.store');
Route::post('/posts/imagenes', [ImagenController::class, 'store'])->middleware('auth')->name('imagenes.store');
Route::get('/posts/{post}', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->middleware('auth')->name('posts.destroy');
Route::post('/posts/{post}', [ComentarioController::class, 'store'])->name('comentario.store');
// Route::get('/posts/imagenes', [ImagenController::class, 'index'])->name('imagenes.index');
// //Like de posts
Route::post('/posts/{post}/likes', [LikeController::class, 'store'])->name('posts.likes.store');
Route::delete('/posts/{post}/likes', [LikeController::class, 'destroy'])->name('posts.likes.destroy');
// //Save de posts
Route::post('/posts/{post}/saves', [LikeController::class, 'store'])->name('posts.saves.store');
Route::delete('/posts/{post}/saves', [LikeController::class, 'destroy'])->name('posts.saves.destroy');
//Categorias de post
Route::get('/categoria/{categoria}', [PostController::class, 'category'])->name('posts.category');
//perfiles de usuarios
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Notificaciones
Route::get('/notificaciones', NotificacionController::class)->middleware(['auth', 'verified'])->name('notificaciones');

require __DIR__ . '/auth.php';
Route::get('/{user:username}', [PostController::class, 'index'])->name('index');
