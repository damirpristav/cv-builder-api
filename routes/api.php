<?php

use App\Http\Controllers\PDFBuilderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/pdf', [PDFBuilderController::class, 'index']);
