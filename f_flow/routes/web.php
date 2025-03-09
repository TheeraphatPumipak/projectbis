<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FacebookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('Home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('facebook-data', [FacebookController::class, 'getFacebookData']);
Route::get('/warehouse', [PageController::class, 'warehouse'])->name('wharehouse');
Route::get('/sale', [PageController::class, 'sale'])->name('sale');

// หน้า Login
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::post('/login', [PageController::class, 'loginSubmit']); // ฟังก์ชันสำหรับส่งข้อมูล login

// หน้า Register
Route::get('/register', [PageController::class, 'register'])->name('register');
Route::post('/register', [PageController::class, 'registerSubmit']); // ฟังก์ชันสำหรับส่งข้อมูล register

// หน้า Home
Route::get('/home', [PageController::class, 'Home'])->name('Home');

require __DIR__ . '/auth.php';
