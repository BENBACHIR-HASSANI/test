<?php

use App\Http\Controllers\WelcomeController;
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
Route::get('/forms', [WelcomeController::class, 'forms']);
Route::get('/env', [WelcomeController::class, 'env']);
Route::get('/dashboard', [WelcomeController::class, 'dashboard']);
Route::get('/migration', [WelcomeController::class, 'migration']);
Route::get('/package', [WelcomeController::class, 'package']);
Route::get('/page', [WelcomeController::class, 'pagedev']);

