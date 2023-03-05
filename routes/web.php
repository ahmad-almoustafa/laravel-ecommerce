<?php

use App\Http\Controllers\BrandController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('brands')->middleware('auth')->group(function(){
    Route::get('/', [BrandController::class,'index'])->name('brands.index');
    Route::get('/create',[BrandController::class,'create'])->name('brands.create');
    Route::post('/store',[BrandController::class,'store'])->name('brands.store');
    Route::get('{brand}/edit',[BrandController::class,'edit'])->name('brands.edit');
    Route::put('{brand}/update',[BrandController::class,'update'])->name('brands.update');

});

require __DIR__.'/auth.php';
