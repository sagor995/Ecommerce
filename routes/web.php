<?php

use Illuminate\Support\Facades\Route;

//Frontend

//Backend
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\CategoryController;

/*
|--------------------------------------------------------------------------
| Frontend Web Routes
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

/*
|--------------------------------------------------------------------------
| Backend Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    //Category Group
    Route::group(['prefix' => 'category'], function () {
        Route::get('/manage', [CategoryController::class, 'index'])->name('category.manage');
        Route::get('/add', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/edit', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('/update', [CategoryController::class, 'update'])->name('category.update');
        Route::post('/destroy', [CategoryController::class, 'destroy'])->name('category.destroy');
    });
});
