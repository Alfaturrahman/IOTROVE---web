<?php


use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
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
Route::get('/', ([LandingController::class,'showLandingPage']))
->name('landingPage');

Route::get('/login', [LoginController::class, 'showLoginPage'])
->name('loginPage');

Route::get('/dashboard', [DashboardController::class, 'showDashboardPage'])
->name('dashboardPage');

Route::get('/dashboard/detail', [DashboardController::class, 'showDashboardDetailPage'])
->name('dashboardDetailPage');
