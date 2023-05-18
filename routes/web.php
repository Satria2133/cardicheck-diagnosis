<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiagnosticController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/diagnostic', [DiagnosticController::class,'showInputDiagnosticForm'])->name('third-page');
Route::post('/countDiagnostic', [DiagnosticController::class,'countDiagnosticUsingFraminghamAlgorithm'])->name('countDiagnostic');
