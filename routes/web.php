<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EsController;
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
//名前付きルート

Route::get('/', function () { return view('welcome'); });
Route::get('/inds', [PostController::class, 'index'])->name('index');
Route::get('/industries/{industry}', [PostController::class,'industry']);//業種１
Route::get('/types/{type}', [PostController::class,'type']);//業種２
Route::get('/companies/{company}', [PostController::class,'company']);
Route::get('/d', [PostController::class, 'maincate'])->name('maincate');

//投稿用
Route::get('/posts/escreate/{company}', [PostController::class, 'create']);
Route::post('/esposts', [PostController::class, 'estore']);
Route::get('/posts/{sheet}', [PostController::class, 'show']);
Route::get('/posts/ccreate/{type}', [PostController::class, 'ccreate']);//会社用
Route::post('/csposts', [PostController::class, 'cstore']);
Route::delete('/cposts/{company}', [PostController::class,'cdelete']);
//編集用
Route::get('/posts/{sheet}/edit', [PostController::class, 'edit']);
Route::put('/posts/{sheet}', [PostController::class, 'update']);
Route::delete('/posts/{sheet}', [PostController::class,'delete']);

//カテゴリ
Route::get('/categories/{category}', [PostController::class,'cates']);

//標準機能
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
