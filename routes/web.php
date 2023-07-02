<?php

use App\Http\Controllers\DesainController;
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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/kontak', [DesainController::class, 'create']);
Route::get('/Tambah', [DesainController::class, 'creates']);
Route::get('/kontakedit', [DesainController::class, 'created']);
Route::get('/homeedit', [DesainController::class, 'createf']);