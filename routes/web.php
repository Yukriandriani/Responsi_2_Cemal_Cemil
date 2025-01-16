<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;


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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Halaman About
Route::get('/about', function () {
    return view('about');
})->name('about');

// Halaman Kontak
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Halaman Shop
Route::get('/shop', function () {
    return view('shop'); // Pastikan nama filenya adalah shop.blade.php
})->name('shop');

// Halaman Checkout
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

// Proses Checkout
Route::post('/checkout/process', function (\Illuminate\Http\Request $request) {
    // Proses data checkout
    $data = $request->all();

    // Debug data (untuk sementara)
    // dd($data);

    // Redirect setelah proses selesai
    return redirect()->route('checkout')->with('success', 'Pesanan Anda telah diproses!');
})->name('checkout.process');

// Admin Dashboard (Hanya untuk Admin)
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('users', UserController::class);
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.home');

Route::get('/employees/edit/{id}', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::post('/employees/update/{id}', [EmployeeController::class, 'update'])->name('employees.update');