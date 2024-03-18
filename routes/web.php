<?php

use App\Http\Controllers\PetController;
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
    return view('homepage');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/newsworld', function () {
    return view('newsworld');
})->name('newsworld');

Route::get('/sport', function () {
    return view('sport');
})->name('sport');


Route::get('/music', function () {
    return view('music');
})->name('music');

Route::get('/business', function () {
    return view('business');
})->name('business');

Route::get('/health', function () {
    return view('health');
})->name('health');

Route::get('/travel', function () {
    return view('travel');
})->name('travel');

Route::get('/travel2', function () {
    return view('journey/travel2');
})->name('travel2');

Route::get('/home2page', function () {
    return view('homesecondpage');
})->name('homesecondpage');

Route::get('/science', function () {
    return view('science');
})->name('science');

Route::get('/my-profile', function () {
    return view('my-profile');
})->name('my-profile');

Route::get('/search', function () {
    return view('search');
})->name('search');

Route::get('/music2', function () {
    return view('journey/music2');
})->name('music2');

Route::get('/health2', function () {
    return view('journey/health2');
})->name('health2');

Route::get('/business2', function () {
    return view('journey/business2');
})->name('business2');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
