<?php

use App\Http\Controllers\AIController;
use Illuminate\Support\Facades\Route;

Route::post('/ai',[AIController::class, 'responseV1']);