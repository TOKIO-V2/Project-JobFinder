<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\StatusController;

Route::get('/', [OfferController::class, 'index' ])->name('homeOffer');
Route::get('/offer/{id}', [OfferController::class, 'show'])->name('showOfferDetail');

Route::get('/', [StatusController::class, 'index' ])->name('homeStatus');
Route::get('/status/{id}', [StatusController::class, 'show'])->name('showStatusDetail');