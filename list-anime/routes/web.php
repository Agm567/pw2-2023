<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardUsersController;
use App\Http\Controllers\DashboardGenresController;
use App\Http\Controllers\DashboardMoviesController;
use App\Http\Controllers\DashboardReviewsController;
use App\Http\Controllers\DashboardCountriesController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LandingGenresController;
use App\Http\Controllers\LandingMoviesController;

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

Route::get('/', [LandingController::class, 'index']);
Route::resource('/movies', LandingMoviesController::class);
Route::resource('/genres', LandingGenresController::class);

// auth
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('/genres', DashboardGenresController::class);
    Route::resource('/countries', DashboardCountriesController::class);
    Route::resource('/movies', DashboardMoviesController::class);
    Route::resource('/reviews', DashboardReviewsController::class);
    Route::resource('/users', DashboardUsersController::class);
});
