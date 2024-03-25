<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\OfferDetailController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::group(['namespace' => 'App\Http\Controllers'], function () {

    /**
     * Pages Routes
     */
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::match(['get', 'post'], '/destinations', [DestinationController::class, 'index']);
    Route::get('/offers', [OfferController::class, 'index']);
    Route::match(['get', 'post'], '/offers-detail', [OfferDetailController::class, 'index']);
    Route::get('/about-us', [AboutController::class, 'index']);
    Route::get('/faqs', [FaqController::class, 'index']);
    Route::get('/contact-us', [ContactController::class, 'index']);

    /**
     * Auth Routes
     */
    Route::group(['middleware' => ['auth']], function () {

        /**
         * Dashboard Routes
         */
        Route::get('/dashboard', [DashboardController::class, 'index']);


        /**
         * Logout Routes
         */
        Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');
    });

    /**
     * Guest Routes
     */
    Route::group(['middleware' => ['guest']], function () {

        /**
         * Register Routes
         */
        Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
        Route::post('/register', [RegisterController::class, 'register'])->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', [LoginController::class, 'show'])->name('login.show');
        Route::post('/login', [LoginController::class, 'login'])->name('login.perform');
    });
});
