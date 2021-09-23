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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

//Sales representative
Route::GET('/add', [App\Http\Controllers\SaleRepController::class, 'index']);
Route::POST('/add', [App\Http\Controllers\SaleRepController::class, 'add'])->name('AddSRep');
//Commission and Target

Route::GET('/viewCT', [App\Http\Controllers\SaleRepController::class, 'indexCT']);
//Route::GET('/addCT', [App\Http\Controllers\SaleRepController::class, 'addCT']);
Route::GET('/addCT', function () {return view('AddCT');});
Route::POST('/addCT', [App\Http\Controllers\SaleRepController::class, 'addCT'])->name('AddCT');
