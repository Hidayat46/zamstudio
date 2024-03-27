<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\ProspectController;
use Illuminate\Support\Facades\Route;



// Route::get('/table/user', function () {
//     return view('layout.user');
// })->name('table.user');

Route::get('/', [ProspectController::class, 'welcome'])->name('welcome');
Route::get('/users', [ProspectController::class, 'index'])->name('prospects.index');
Route::get('/prospect/page', [ProspectController::class, 'create'])->name('prospects.page');
Route::post('/prospect', [ProspectController::class, 'store'])->name('prospects.store');;
Route::get('/city', [CityController::class, 'index'])->name('city.index');
Route::post('/cities', [CityController::class, 'store'])->name('cities.store');
