<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/series', SeriesController::class)->only(['index', 'create', 'store', 'destroy']);


