<?php
use App\Http\Controllers\InfoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [infoController::class, 'index']);
