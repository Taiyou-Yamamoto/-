<?php

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
    return view('welcome');
});


Route::get('/home', [App\Http\Controllers\MemberController::class, 'home_index'])->name('home');
Route::get('/login', [App\Http\Controllers\MemberController::class, 'login_index'])->name('login');
Route::post('/member', [App\Http\Controllers\MemberController::class, 'store'])->name('member');
Route::get('/edit/{id}',[App\Http\Controllers\MemberController::class, 'edit_index'])->name('edit');

