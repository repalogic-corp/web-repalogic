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

Route::get('/', [WebSiteSakolaController::class, 'index'])->name('web_sakola');
Route::get('/sejarah', [WebSiteSakolaController::class, 'web_sejarah'])->name('sejarah');
Route::get('/visi-misi', [WebSiteSakolaController::class, 'visimisi'])->name('visimisi');
Route::get('/konsentrasi-keahlian', [WebSiteSakolaController::class, 'prodi'])->name('prodi');

require __DIR__ . '/web-admin.php';
require __DIR__ . '/web-temp.php';
