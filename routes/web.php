<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Env_sourceController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\VersionController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [AuthController::class, 'create'])->name('login');
Route::post('/login', [AuthController::class, 'store'])->name('login.store');
// Route::get('/register', [WelcomeController::class, 'register'])->middleware('auth.inertia');
Route::get('/forgotPassword', [ForgotPasswordController::class, 'show'])->name('forgot-password');

// Route::get('/', [WelcomeController::class, 'login']);
Route::group(['middleware' => 'auth'], function () {
    Route::get('/environement', [WelcomeController::class, 'environement'])->name('environement')->middleware('auth.inertia');
    Route::get('/test', [WelcomeController::class, 'test'])->name('test')->middleware('auth.inertia');
    Route::get('/profil', [WelcomeController::class, 'userprofil'])->name('profil')->middleware('auth.inertia');
    Route::get('/user', [WelcomeController::class, 'user'])->name('user')->middleware('auth.inertia');
    Route::get('/NewUser', [UserController::class, 'create'])->name('create')->middleware('auth.inertia');
    Route::get('/forms', [WelcomeController::class, 'forms'])->name('forms')->middleware('auth.inertia');
    Route::get('/dashboard', [WelcomeController::class, 'dashboard'])->name('dashboard')->middleware(['auth', 'verified']);
    Route::get('/migration', [WelcomeController::class, 'migration'])->name('migration')->middleware('auth.inertia');
    Route::get('/package', [WelcomeController::class, 'package'])->name('package')->middleware('auth.inertia');
    // Route::resource('env', Env_sourceController::class)->only(['index', 'create', 'store'])->middleware('auth.inertia');
    Route::resource('type', TypeController::class)->middleware('auth.inertia');
    Route::resource('version', VersionController::class)->middleware('auth.inertia');
    Route::resource('env_source', Env_sourceController::class)->middleware('auth.inertia');
});
Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');
