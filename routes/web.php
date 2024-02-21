<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScraperController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/get/{ip}', function ($ip) {
    return ScraperController::scamAlytics($ip);
});
