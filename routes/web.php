<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\KonsultasiController::class, 'index'])->name('/');