<?php

use App\Http\Controllers\AdvertiserController;
use App\Http\Controllers\OfferController;

Route::apiResource('advertisers', AdvertiserController::class);
Route::apiResource('offers', OfferController::class);

