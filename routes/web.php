<?php

use Illuminate\Support\Facades\Route;

// Landlord routes
Route::name('landlord.')->domain('schoolsite.test')->group( function() {
    Route::get('/', \App\Http\Controllers\Landlord\WelcomeController::class )->name('welcome');
});



// Tenant routes
Route::middleware('is_tenant')->group(function () {
    Route::get('/', \App\Http\Controllers\WelcomeController::class )->name('welcome');
});
