<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Index', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register')
    ]);
})->name('index');;

Route::get('login', function () {
    return Inertia::render('auth.login');
})->name('login');

Route::get('feeds', function () {
    return Inertia::render('Feeds');
})->middleware(['auth', 'verified'])->name('feeds');

Route::get('admin', function () {
    return Inertia::render('Admin');
})->middleware(['auth', 'verified'])->name('admin');

Route::get('moderator', function () {
    return Inertia::render('Moderator');
})->middleware(['auth', 'verified'])->name('moderator');

Route::middleware('auth')->group(function () {
    Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('settings', function () { return redirect('settings/security'); })->name('settings');
    Route::get('settings/security', function () { return Inertia::render('Profile/Security'); })->name('settings.security');
    Route::patch('profile/edit', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('profile/edit', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';