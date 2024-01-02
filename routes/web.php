<?php

use App\Http\Controllers\ErrorController;
use App\Http\Controllers\WebSiteSakolaController;

use Illuminate\Support\Facades\Route;

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

Route::fallback([ErrorController::class, 'index']);

Route::get('/websakola', [WebSiteSakolaController::class, 'index'])->name('web_sakola');

require __DIR__ . '/web-admin.php';
require __DIR__ . '/web-temp.php';
