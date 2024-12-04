<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\StatusCompanyController;

Route::get('/', [OfferController::class, 'index' ])->name('homeoffer');
Route::get('/offer{id}', [OfferController::class, 'show'])->name('showOfferDetail');

Route::get('/status', [StatusCompanyController::class, 'index' ])->name('home');
Route::get('/status/{id}', [StatusCompanyController::class, 'show'])->name('showStatusDetail');
