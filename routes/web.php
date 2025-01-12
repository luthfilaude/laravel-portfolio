<?php
use Filament\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
// Redirect ke dashboard Filament jika login berhasil
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('admin');
    })->name('filament.dashboard');
});

// Logout rute bawaan Laravel
Route::post('/logout', LogoutController::class);