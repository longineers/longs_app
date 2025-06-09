<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::apiResource('advertisers', \App\Http\Controllers\AdvertiserController::class);
Route::apiResource('offers', \App\Http\Controllers\OfferController::class);