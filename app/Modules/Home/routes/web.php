<?php
use App\Modules\Home\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/home', [MainController::class, 'index']);
