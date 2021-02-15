<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'home'])->name('home')->middleware('searchersReferer');
Route::get('/serp', [PagesController::class, 'serp'])->name('serp')->middleware('searchersReferer');
Route::get('/cookies', [PagesController::class, 'cookies'])->name('cookies');
Route::post('/acceptCookies', [PagesController::class, 'acceptCookies'])->name('acceptCookies');
