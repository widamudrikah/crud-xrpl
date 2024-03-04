<?php

use App\Http\Controllers\FruitController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(FruitController::class)->group(function(){
    Route::get('/fruit', 'index')->name('fruit.index');
    Route::get('/fruit/create', 'create')->name('fruit.create');
    Route::post('/fruit/store', 'store')->name('fruit.store');
    Route::get('/fruit/show/{id}', 'show')->name('fruit.show');
    Route::get('/fruit/edit/{id}', 'edit')->name('fruit.edit');
    Route::put('/fruit/update/{id}', 'update')->name('fruit.update');
    Route::get('/fruit/delete/{id}', 'destroy')->name('fruit.destroy');
});
