<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/',[PostController::class,'index'])->name('dashboard');
    Route::get('/admin/dashboard', [HomeController::class,'dashboard'])->name('admin');



});

Route::post('posts/store', [PostController::class,'store'])->name('posts.store');
Route::post('commentaire/store/{id}', [PostController::class,'savecomment'])->name('commentaire.store');
Route::get('commentaire/show/{id}', [PostController::class,'showcomment'])->name('commentaires.show');
Route::post('replies/store/{id}/{id_post}', [PostController::class,'storereplies'])->name('replies.store');
Route::get('publications/{id}', [PostController::class,'viewpublications'])->name('publications');
Route::get('viewpost/{id}', [PostController::class,'viewpost'])->name('viewpost');
Route::post('update/{id}', [PostController::class,'update'])->name('update');
Route::post('destroy/{id}', [PostController::class,'destroy'])->name('destroy');
Route::post('activer/{id}', [PostController::class,'activer'])->name('activer');



Route::get('posts',  [HomeController::class,'posts']);

Route::get('clt', [HomeController::class,'clt']);
Route::get('/crud/{id}', [HomeController::class,'show']);

Route::post('/crud', [HomeController::class,'store']);
Route::put('/crud/{id}', [HomeController::class,'update']);
Route::post('/activer/{id}', [HomeController::class,'activer'])->name('activer');



