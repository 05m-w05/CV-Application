<?php

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
    return view('application/index');
});

Route::post('/application/page-1/store', [App\Http\Controllers\ApplicationController::class, 'page1store'])->name('page-1.store');
Route::post('/application/page-2/store', [App\Http\Controllers\ApplicationController::class, 'page2store'])->name('page-2.store');
Route::post('/application/page-3/store', [App\Http\Controllers\ApplicationController::class, 'page3store'])->name('page-3.store');
Route::post('/application/store', [App\Http\Controllers\ApplicationController::class, 'store'])->name('store');

Route::get('/application/page-1/create', [App\Http\Controllers\ApplicationController::class, 'page1create'])->name('page-1.create');
Route::get('/application/page-2/create', [App\Http\Controllers\ApplicationController::class, 'page2create'])->name('page-2.create');
Route::get('/application/page-3/create', [App\Http\Controllers\ApplicationController::class, 'page3create'])->name('page-3.create');
Route::get('/application/page-4/create', [App\Http\Controllers\ApplicationController::class, 'page4create'])->name('page-4.create');
Route::get('/application/page-5/create', [App\Http\Controllers\ApplicationController::class, 'page5create'])->name('page-5.create');
