<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
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
    return view('login');
});

Route::post('/login', [LoginController::class, 'Auth']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/add', [SiswaController::class, 'add']);
Route::post('/siswa/create', [SiswaController::class, 'create']);
Route::get('/siswa/delete/{nis}', [SiswaController::class, 'delete']);
Route::get('/siswa/edit/{nis}', [SiswaController::class, 'edit']);
Route::post('/siswa/update/{nis}', [SiswaController::class, 'update']);