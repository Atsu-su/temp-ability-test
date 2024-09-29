<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Requests\ContactForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ContactController::class, 'index'])->name('contact.index');
Route::get('/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
Route::post('/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
Route::post('/thanks', [ContactController::class, 'store'])->name('contact.store');

// Route::get('/confirm', function() {
//     return view('confirm');
// });

// Route::get('/thanks', function() {
//     return view('thanks');
// });

// Route::get('/admin', function() {
//     return view('admin');
// });

// Route::get('/admin', [AuthController::class, 'index']);


// 認証機能を追加
// Route::middleware('auth')->group(function() {
//     Route::get('/admin', [AuthController::class, 'index']);
// });
