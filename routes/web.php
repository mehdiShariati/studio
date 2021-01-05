<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\Category_portfoliosController;
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

Route::get('/', HomeController::class."@index");
Route::get('/about', HomeController::class."@about");
Route::get('/contact', HomeController::class."@contact");
Route::post('/contact', CustomerController::class."@store");
Route::get('/home', HomeController::class.'@index')->name('home');
Route::get("/portfolios",HomeController::class."@portfolios");
Route::get("/portfolio/show/{}",HomeController::class."@portfolios");



Route::prefix('admin')->middleware(['auth',\App\Http\Middleware\CheckAdminMiddleware::class])->group(function () {
    Route::get('/',AdminController::class."@dashboard");
    Route::resource("tag",\App\Http\Controllers\TagController::class);
    Route::prefix('portfolio')->group(function () {
    Route::get('/',PortfolioController::class."@index");
    Route::get('/createCategoryPortfolio',AdminController::class."@createCategoryPortfolio");
    Route::post('/createCategoryPortfolio',Category_portfoliosController::class."@store");
    Route::get("/createPortfolio",PortfolioController::class."@create");
    Route::post("/createPortfolio",PortfolioController::class."@store");
    Route::get("{image}/edit",PortfolioController::class."@edit")->name("portfolio.edit");
    Route::put("{image}/update",PortfolioController::class."@update")->name("portfolio.update");
    Route::delete("{image}/destroy",PortfolioController::class."@destroy")->name("portfolio.destroy");


});

});

Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

Route::get('password/reset', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [App\Http\Controllers\Auth\ResetPasswordController::class, 'reset'])->name('password.update');

Route::get('password/confirm', [App\Http\Controllers\Auth\ConfirmPasswordController::class, 'showConfirmForm'])->name('password.confirm');
Route::post('password/confirm', [App\Http\Controllers\Auth\ConfirmPasswordController::class, 'confirm']);

Route::get('email/verify', [App\Http\Controllers\Auth\VerificationController::class, 'show'])->name('verification.notice');
Route::get('email/verify/{id}/{hash}', [App\Http\Controllers\Auth\VerificationController::class, 'verify'])->name('verification.verify');
Route::post('email/resend', [App\Http\Controllers\Auth\VerificationController::class, 'resend'])->name('verification.resend');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
