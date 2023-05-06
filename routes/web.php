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
Route::get('/', function () { return view('welcome'); });
Route::get('/inds', [PostController::class, 'index'])->name('index');
Route::get('/industries/{industry}', [EsController::class,'industry']);
Route::get('/posts/escreate', [PostController::class, 'create']);
Route::post('/esposts', [PostController::class, 'estore']);
//Route::get('/inds/{type}', [PostController::class ,'type']);
//Route::get('/inds',[PostController::class,'index']);
Route::get('/types',[PostController::class,'type']);
Route::get('/comps',[PostController::class,'comp']);
Route::get('/sheets',[PostController::class,'sheet']);
//Route::get('/EsController', [EsController::class, 'menu']); 
//Route::get('/', [EsController::class, 'menu'])->name('menu');//'/'が一番最初に送られてくるやつ

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
