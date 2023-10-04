<?php

use App\Http\Controllers\ElementController;
use Illuminate\Support\Facades\Auth;
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
    return to_route('products.index');
});

Auth::routes();



//  lab-2 CRUD 

Route::get('/products', [ElementController::class, 'index'])->name('products.index');

Route::get('/products/show/{id}', [ElementController::class, 'show'])->name('products.show');


Route::get('/products/delete/{id}', [ElementController::class, 'destroy'])->name('products.destroy');

Route::get('/products/create', [ElementController::class, 'create'])->name('products.create');

Route::post('/products/store', [ElementController::class, 'store'])->name('products.store');


Route::get('/products/edit/{id}', [ElementController::class, 'edit'])->name('products.edit');

Route::post('/products', [ElementController::class, 'update'])->name('products.update');
