<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
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

// Route::get('/', function () {
//     return view('frontend.index');
// });

Route::get('/', [IndexController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('logo')->group(function () {
        Route::get('/form', [LogoController::class, 'showForm'])->name('logo.form');
        Route::post('/upload', [LogoController::class, 'upload'])->name('logo.upload');
    });

    Route::prefix('property')->group(function () {
        Route::get('/create', [PropertyController::class, 'create'])->name('property.create');
        Route::post('/add', [PropertyController::class, 'addProperty'])->name('property.upload');
    });
    
});

require __DIR__.'/auth.php';
