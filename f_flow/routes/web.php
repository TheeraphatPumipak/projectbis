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
Route::get('/Login', [PageController::class, 'Login'])->name('Login');
Route::post('/Login', [PageController::class, 'loginSubmit']); // ฟังก์ชันสำหรับส่งข้อมูล login

// หน้า Register
Route::get('/Register', [PageController::class, 'Register'])->name('Register');
Route::post('/Register', [PageController::class, 'registerSubmit']); // ฟังก์ชันสำหรับส่งข้อมูล register

// หน้า Home
Route::get('/Home', [PageController::class, 'Home'])->name('Home');

Route::get('/Sale', [PageController::class, 'Salepage'])->name('Sale');

require __DIR__ . '/auth.php';
