<?php

use App\Http\Controllers\PersonalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BajaController;
use App\Http\Controllers\TCATController;
use App\Http\Controllers\TCATPController;


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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('principal');
    })->name('dashboard');


    Route::get('menu', function () {
        return view('opcionesPersonal');
    })->name('menu');
    
    Route::get('certificados_digitales', function () {
        return view('opcionesCertificadosDigitales');
    })->name('certificados_digitales');
    
    Route::resource('bajas', BajaController::class);

    Route::get('/personal',[PersonalController::class,'index'])->name('personal.index');
    Route::get('/personal/create',[PersonalController::class,'create'])->name('personal.create'); 
    Route::post('/personal',[PersonalController::class,'store'])->name('personal.store');
    Route::post('/personal',[PersonalController::class,'store'])->name('personal.store');
    Route::get('personal/{personal}/edit', [PersonalController::class, 'edit'])->name('personal.edit');
    Route::post('personal/{personal}', [PersonalController::class, 'update'])->name('personal.update');

    Route::resource('tcat', TCATController::class);
    Route::resource('tcatp', TCATPController::class);
    Route::resource('personal', PersonalController::class);



});










