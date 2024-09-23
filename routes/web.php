<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/all-portfolio', [FrontController::class, 'portfolio'])->name('all-portfolio');
Route::get('/service', [FrontController::class, 'service'])->name('service');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::post('/add-contact', [FrontController::class, 'addContact'])->name('add-contact');
Route::get('/gallery', [FrontController::class, 'gallery'])->name('gallery');
Route::get('/portfolio-detail/{id}', [FrontController::class, 'portfolioDetail'])->name('portfolio-detail');


Route::middleware([
    'auth:sanctum, ',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('portfolios', PortfolioController::class);
    Route::resource('services',ServiceController ::class);
    Route::resource('contacts',ContactController ::class);
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
});
