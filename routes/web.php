<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\OrganizationUnitController;
use App\Http\Controllers\UserController;
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

Route::get('/register', [AuthController::class, 'register'])->name('register.get');
Route::post('/register', [AuthController::class, 'store'])->name('register.post');
Route::get('/login', [AuthController::class, 'login'])->name('login.get');
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::get('/settings', [UserController::class, 'settings'])->name('settings');
Route::get('/ous', [OrganizationUnitController::class, 'index'])->name('ous');
Route::get('/groups', [GroupController::class, 'index'])->name('groups');
Route::get('/users', [UserController::class, 'users'])->name('users');

Route::get('/', function () {
    return view('welcome');
});