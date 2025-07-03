<?php

// routes/web.php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\InformationController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'redirect.if.admin'])->group(function () {

    // Rute untuk dashboard pengguna biasa
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['verified'])->name('dashboard');

    // Rute untuk manajemen profil pengguna biasa
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/volunteer', fn() => app(VolunteerController::class)->showByCategory(1, 'volunteer'))->name('volunteer');
Route::get('/magang', fn() => app(VolunteerController::class)->showByCategory(3, 'magang'))->name('magang');
Route::get('/perlombaan', fn() => app(VolunteerController::class)->showByCategory(2, 'perlombaan'))->name('perlombaan');
Route::get('/kampus', fn() => app(VolunteerController::class)->showByCategory(4, 'kampus'))->name('kampus');
Route::get('/lainya', fn() => app(VolunteerController::class)->showByCategory(5, 'lainya'))->name('lainya');
Route::middleware(['auth'])->group(function () {
    Route::get('/bookmark', [BookmarkController::class, 'index'])->name('bookmark.index');
    Route::post('/bookmark/{id}', [BookmarkController::class, 'toggle'])->name('bookmark.toggle');
});
require __DIR__.'/auth.php';