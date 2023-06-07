<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('themes.layouts.index');
})->name('home');

Route::controller(HomeController::class)->group(function () {

    Route::get('/ajouter_sinistre/{item?}','ajouterSinistre')->name('ajouter_sinistre');
    Route::post('/sinistre/store','sinistreStore')->name('sinistre.store');
    Route::get('/sinistre/index','sinistreIndex')->name('sinistre.index');


});
