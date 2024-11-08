<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\JungleController;
use App\Http\Controllers\MidController;
use App\Http\Controllers\AdcController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\FavoriteVideosController;

//Routes voor de Roles pagina's

Route::get('/top', [TopController::class, 'index'])->name('top.index');
Route::get('/jungle', [JungleController::class, 'index'])->name('jungle.index');
Route::get('/mid', [MidController::class, 'index'])->name('mid.index');
Route::get('/adc', [AdcController::class, 'index'])->name('adc.index');
Route::get('/support', [SupportController::class, 'index'])->name('support.index');

// Definieer de resource-routes voor video's en rollen

Route::resource('videos', VideoController::class);
Route::get('/videos/{id}/edit', 'VideoController@edit')->name('videos.edit');

// Favorieten routes
Route::middleware(['auth'])->group(function () {
    Route::get('/favorites', [FavoriteVideosController::class, 'index'])->name('favorite.index');
    Route::post('/videos/{video}/favorite', [FavoriteVideosController::class, 'addToFavorites'])->name('videos.favorite'); // POST-verzoek om video aan favorieten toe te voegen
    Route::get('/videos/favorites', [FavoriteVideosController::class, 'viewFavorites'])->name('videos.favorites');
    Route::delete('/videos/{video}/favorite', [FavoriteVideosController::class, 'removeFromFavorites'])->name('videos.unfavorite');
});





//AUTH

// Login routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Forgot password routes
Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

// Reset password routes
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');

// Logout route
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

//Register routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// De rootroute
Route::get('/', [VideoController::class, 'index'])->name('welcome');
Route::get('/search', [VideoController::class, 'search'])->name('search');


