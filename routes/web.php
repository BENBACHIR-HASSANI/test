<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Env_sourceController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [WelcomeController::class, 'login']);
Route::get('/register', [WelcomeController::class, 'register']);
Route::get('/environement', [WelcomeController::class, 'environement'])->name('environement');
Route::get('/test', [WelcomeController::class, 'test'])->name('test');
Route::get('/user', [WelcomeController::class, 'user'])->name('user');
Route::get('/forms', [WelcomeController::class, 'forms'])->name('forms');
Route::get('/dashboard', [WelcomeController::class, 'dashboard'])->name('dashboard');
Route::get('/migration', [WelcomeController::class, 'migration'])->name('migration');
Route::get('/package', [WelcomeController::class, 'package'])->name('package');
Route::resource('env', Env_sourceController::class)->only(['index', 'create', 'store']);
