<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\OfferController;
use App\Http\Controllers\Api\StatusCompanyController;

Route::get('/offer', [OfferController::class, 'index'])->name('apiHomeOffer');
Route::get('/offer/{id}', [OfferController::class, 'show'])->name('apiShowOffer');
Route::post('/offer', [OfferController::class, 'store'])->name('apiStoreOffer');
Route::put('/offer/{id}', [OfferController::class, 'update'])->name('apiUpdateOffer');
Route::delete('/offer/{id}', [OfferController::class, 'destroy'])->name('apiDestroyOffer');

Route::get('/status', [StatusCompanyController::class, 'index'])->name('apiHomeStatus');
Route::get('/status/{id}', [StatusCompanyController::class, 'show'])->name('apiShowStatus');
Route::post('/status', [StatusCompanyController::class, 'store'])->name('apiStoreStatus');
Route::put('/status/{id}', [StatusCompanyController::class, 'update'])->name('apiUpdateStatus');
Route::delete('/status/{id}', [StatusCompanyController::class, 'destroy'])->name('apiDestroyStatus');