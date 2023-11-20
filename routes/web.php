<?php


use App\Http\Controllers\authController;
use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tbungaController;

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


Route::get('/login', [authController::class, 'show'])->name('log');
Route::post('/login', [authController::class, 'login'])->name('valids');

Route::get('/', [tbungaController::class, 'home'])->name('homes');
Route::get('/produk', [tbungaController::class, 'product'])->name('prod');
Route::get('/admin', [tbungaController::class, 'index'])->name('bungas');
Route::get('/admin/tambah', [tbungaController::class, 'create'])->name('tambah.bunga');
Route::post('/admin', [tbungaController::class, 'store'])->name('tambah');
Route::get('/admin/{id}/edit', [tbungaController::class, 'edit'])->name('edit');
Route::post('/admin/{id}', [tbungaController::class, 'update'])->name('update');
Route::delete('/admin/{id}', [tbungaController::class, 'destroy'])->name('hapus');