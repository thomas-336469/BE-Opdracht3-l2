<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstructeurController;
use App\Http\Controllers\VoertuigController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\OverzichtController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeschikbareVoertuigController;

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
Route::get('/home', function () {
    return view('home');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/instructeurs', [InstructeurController::class, 'index'])->name('instructeurs');;
Route::get('/instructeurs/{instructeur}/edit', [InstructeurController::class, 'edit'])->name('instructeurs.edit');
Route::put('/instructeurs/{instructeur}', [InstructeurController::class, 'update'])->name('instructeurs.update');
Route::delete('/instructeurs/{instructeur}', [InstructeurController::class, 'destroy'])->name('instructeurs.destroy');
Route::patch('/instructeurs/toggleStatus/{instructeur}', [InstructeurController::class, 'toggleStatus'])->name('instructeurs.toggleStatus');
Route::get('/voertuigen', [VoertuigController::class, 'index'])->name('instructeurs')->name('instructeurs.toggleStatus');

Route::get('/voertuigen', [OverzichtController::class, 'index'])->name('beschrikbareVoertuigoverzicht');

Route::get('/overzicht-examens', [ExamenController::class, 'index'])->name('overzicht-examens');
Route::get('/overzicht-voertuigen', [VoertuigController::class, 'index'])->name('overzicht-voertuigen');
Route::get('/overzicht-voertuigen/{id}/edit', [VoertuigController::class, 'edit'])->name('overzicht-voertuigen.edit');

Route::put('/overzicht-voertuigen/{id}', [VoertuigController::class, 'update'])->name('overzicht-voertuigen.update');

Route::get('/beschikbare-voertuigen', [BeschikbareVoertuigController::class, 'index'])->name('beschikbareVoertuigen.index');
