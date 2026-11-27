<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| File ini mengatur URL website kamu.
| Contoh: /about akan membuka PageController@about
*/

// Halaman utama wajib login dulu — pengunjung yang belum login otomatis diarahkan ke halaman Sign In
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/contact', [PageController::class, 'contact'])->name('contact');
    Route::post('/contact', [PageController::class, 'sendContact'])->name('contact.send');
});

// Dashboard hanya bisa diakses setelah login (auth)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Export pesan Contact ke Excel — hanya untuk user yang sudah login
Route::get('/dashboard/messages/export', [PageController::class, 'exportMessages'])
    ->middleware(['auth', 'verified'])
    ->name('messages.export');

// Route profile bawaan Laravel Breeze
Route::middleware('auth')->group(function () {
    Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [\App\Http\Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';