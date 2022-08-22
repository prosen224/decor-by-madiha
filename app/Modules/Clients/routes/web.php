<?php

use App\Modules\Clients\Controller\Admin\ClientController as AdminClientController;
use App\Modules\Clients\Controller\Frontend\ClientController;
use Illuminate\Support\Facades\Route;

// User Route
Route::group(['prefix' => 'clients', 'as' => 'clients.'], function () {
    Route::get('/', [ClientController::class, 'index'])->name("index");
    Route::get('/{id}', [ClientController::class, 'view']);

});

// Admin Route
Route::group(['prefix' => 'admin/clients', 'as' => 'admin.clients.'], function () {
    Route::get('/', [AdminClientController::class, 'index'])->name("index");
    Route::get('/create', [AdminClientController::class, 'create'])->name("create");
    Route::post('/create', [AdminClientController::class, 'store'])->name("store");
    Route::get('/edit/{id}', [AdminClientController::class, 'edit'])->name("edit");
    Route::post('/update/{id}', [AdminClientController::class, 'update'])->name("update");
    Route::get('/delete/{id}', [AdminClientController::class, 'destroy']);


});
