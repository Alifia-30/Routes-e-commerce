<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/kategori-produk', function () {
    return 'ini adalah halaman kategori produk';
});

Route::get('/keranjang-belanja', function () {
    return 'ini adalah halaman keranjang belanja';
});

Route::get('/detail-produk', function () {
    return 'ini adalah halaman detail produk';
});

Route::get('/checkout', function () {
    return 'ini adalah halaman checkout';
});

Route::get('/akun-pengguna', function () {
    return 'ini adalah halaman akun pengguna';
});

Route::get('/home', function () {
    return 'ini adalah halaman home';
});

Route::get('/profile', function () {
    return 'Nama : chelsea';
});

Route::get('/contact', function () {
    return 'No HP : 087842231289';
});

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
