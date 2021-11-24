<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::resource('energies', App\Http\Controllers\EnergyController::class)->except(['create', 'edit']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});