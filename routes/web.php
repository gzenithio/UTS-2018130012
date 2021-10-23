<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonsController;

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
    return redirect(route('home'));
});
Route::get('/home', [PokemonsController::class, 'home'])->name('home');

Route::get('/home/search', [PokemonsController::class, 'search']);

Route::get('/lowtohigh', [PokemonsController::class, 'lowtohigh'])->name('low');

Route::get('/hightolow', [PokemonsController::class, 'hightolow'])->name('high');

Route::get('/AtoZ', [PokemonsController::class, 'az'])->name('az');

Route::get('/ZtoA', [PokemonsController::class, 'za'])->name('za');

Route::get('/surprizeme', [PokemonsController::class, 'arrayrandom'])->name('random');

Route::get('/detail/{id}', [PokemonsController::class, 'data']);




Route::fallback(function () {
    return view('404');
});
