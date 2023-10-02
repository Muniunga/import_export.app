<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelExportController;
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
    return view('welcome');
});
Route::get('/',  [ExcelExportController::class, 'lista']);
Route::get('/export',  [ExcelExportController::class, 'export'])->name('export');
Route::get('/novo',  [ExcelExportController::class, 'novo'])->name('novo');
Route::post('/novo',  [ExcelExportController::class, 'insert'])->name('insert');
Route::get('/import', [ExcelExportController::class, 'showImportForm'])->name('import.form');
Route::get('/import', [ExcelExportController::class, 'showImportForm'])->name('import.form');
Route::post('/import',  [ExcelExportController::class, 'import'])->name('import');

