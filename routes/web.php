<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\StatusCompanyController;

Route::get('/', [OfferController::class, 'index' ])->name('homeOffer');
Route::get('/offer/{id}', [OfferController::class, 'show'])->name('showOfferDetail');

