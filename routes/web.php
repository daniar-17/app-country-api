<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WhatsappController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ViewCircleController;
use App\Http\Controllers\WAController;

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
Route::post('/country/review', [CountryController::class, 'review'])->name('country-review');

Route::get('/country_api', [CountryController::class, 'getApi'])->name('country-api');
Route::get('/whatsapp', [WhatsappController::class, 'index'])->name('whatsapp');
Route::post('/whatsapp/send', [WhatsappController::class, 'send'])->name('whatsapp-send');

Route::get('/view_circle', [ViewCircleController::class, 'index'])->name('view-circle');

Route::get('/wa', [WAController::class, 'index'])->name('wa');


