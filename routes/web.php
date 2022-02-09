<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShippingController;

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

Route::get('/',[ShippingController::class,"index"]);
Route::get('/add',[ShippingController::class,"add"]);
Route::post('/add',[ShippingController::class,"add"]);
Route::post('/calculate',[ShippingController::class,"calculate"]);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
