<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\IdcardController;
use App\Http\Controllers\PlacementController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing', function () {
    return view('landing');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/data', [DataController::class, 'index'])->name('data');

Route::post('/data/import', [DataController::class, 'import'])->name('data.import');
Route::get('/data/delete', [DataController::class, 'deleteAll'])->name('data.deleteAll');

Route::get('/idcard', [IdcardController::class, 'index'])->name('idcard');
Route::post('/idcard', [IdcardController::class, 'store'])->name('idcard.store');
Route::get('/idcard/{idcard}/edit', [IdcardController::class, 'edit'])->name('idcard.edit');
Route::put('/idcard/{idcard}', [IdcardController::class, 'update'])->name('idcard.update');
Route::delete('/idcard/{idcard}', [IdcardController::class, 'destroy'])->name('idcard.destroy');
Route::get('/placement', [PlacementController::class, 'index'])->name('placement');
Route::post('/placement', [PlacementController::class, 'store'])->name('placement.store');
Route::get('/placement/{placement}/edit', [PlacementController::class, 'edit'])->name('placement.edit');
Route::put('/placement/{placement}', [PlacementController::class, 'update'])->name('placement.update');
Route::delete('/placement/{placement}', [PlacementController::class, 'destroy'])->name('placement.destroy');
Route::get('idcard/export', [IdcardController::class, 'export'])->name('idcard.export');
Route::get('placement/export', [PlacementController::class, 'export'])->name('placement.export');
