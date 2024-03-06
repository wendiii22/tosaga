<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaiController;
 
Route::get('/tosaga/{nik}/cek', [HaiController::class, 'index']);
Route::get('/tosaga/{warna}/cek', [HaiController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
