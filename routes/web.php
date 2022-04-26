<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\NilaiController;
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
    return view('index');
});

Route::prefix('dosen')->group(function () {
    Route::get('/', [DosenController::class, 'index']);
    Route::get('/{id}', [DosenController::class, 'show']);
    Route::post('/', [DosenController::class, 'create']);
    Route::put('/{id}', [DosenController::class, 'update']);
    Route::delete('/{id}', [DosenController::class, 'delete']);
});

Route::prefix('mahasiswa')->group(function () {
    Route::get('/', [MahasiswaController::class, 'index']);
    Route::get('/{id}', [MahasiswaController::class, 'detail']);
    Route::post('/', [MahasiswaController::class, 'create']);
    Route::put('/{id}', [MahasiswaController::class, 'update']);
    Route::delete('/{id}', [MahasiswaController::class, 'delete']);
});

Route::prefix('matkul')->group(function () {
    Route::get('/', [MatkulController::class, 'index']);
    Route::get('/{id}', [MatkulController::class, 'detail']);
    Route::post('/', [MatkulController::class, 'create']);
    Route::put('/{id}', [MatkulController::class, 'update']);
    Route::delete('/{id}', [MatkulController::class, 'delete']);
});

Route::prefix('nilai')->group(function () {
    Route::get('/', [NilaiController::class, 'index']);
    Route::get('/{id}', [NilaiController::class, 'detail']);
    Route::post('/', [NilaiController::class, 'create']);
    Route::put('/{id}', [NilaiController::class, 'update']);
    Route::delete('/{id}', [NilaiController::class, 'delete']);
});

Route::resource('dosen', DosenController::class)
    ->missing(function (Request $request) {
        return Redirect::route('dosen.index');
    });

