<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\CountryController;

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

Route::get('/', function () {
    return view('main');
});

Route::get('/country', [CountryController::class, 'index'])->name('country');
Route::post('/country/search', [CountryController::class, 'search'])->name('country-search');
Route::get('/country_api', [CountryController::class, 'getApi'])->name('country-api');



