<?php

use Illuminate\Support\Facades\Route;
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
    Route::get('/admin/dashboard', function () {
        return view('dashboard_admin');
    })->name('admin');


});

Route::post('posts/store', [PostController::class,'store'])->name('posts.store');
Route::post('commentaire/store/{id}', [PostController::class,'savecomment'])->name('commentaire.store');
Route::get('commentaire/show/{id}', [PostController::class,'showcomment'])->name('commentaires.show');
Route::post('replies/store/{id}/{id_post}', [PostController::class,'storereplies'])->name('replies.store');
Route::get('publications/{id}', [PostController::class,'viewpublications'])->name('publications');
Route::get('viewpost/{id}', [PostController::class,'viewpost'])->name('viewpost');
Route::post('update/{id}', [PostController::class,'update'])->name('update');
Route::post('destroy/{id}', [PostController::class,'destroy'])->name('destroy');

