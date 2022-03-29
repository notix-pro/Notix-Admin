<?php

use App\Http\Controllers\Admin\AdminMainController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('/error', [MainController::class, '_error'])->name('error');


Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return redirect()->route('admin.login');
    });
    Route::get('/dashboard', [AdminMainController::class, 'index'])->name('admin.dashboard');

    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [LoginController::class, 'login'])->name('admin.login.submit');
    Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');
});



