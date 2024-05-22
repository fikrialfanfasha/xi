<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
})->name('dashboard');
Route::middleware(['auth'])->group(function () {
    Route::get('/kendaraan', [ProdukController::class, 'index'])->name('index');
    Route::get('/tambah', [ProdukController::class, 'create'])->name('create');

    Route::get('/edit/{id}', [ProdukController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [ProdukController::class, 'update'])->name('update');

    Route::post('/store', [ProdukController::class, 'store'])->name('store');
    Route::delete('/hapus/{id}', [ProdukController::class, 'destroy'])->name('destroy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
