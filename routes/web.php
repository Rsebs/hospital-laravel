<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PersonalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class)->name('index');

Route::controller(SessionController::class)->group(function () {
    Route::get('session/login', 'login')->name('session.login');
    Route::get('session/signUp', 'createAccount')->name('session.signUp');
});

Route::controller(PatientController::class)->group(function () {
    // Index
    Route::get('patients/', 'index')->name('patients.index');

    // Create
    Route::get('patients/create', 'create')->name('patients.create');
    Route::post('patients', 'store')->name('patients.store');

    // Update
    Route::get('patients/{patient}/edit', 'edit')->name('patients.edit');
    Route::put('patients/{patient}', 'update')->name('patients.update');

    // Delete
    Route::delete('patients/{patient}', 'destroy')->name('patients.destroy');
});


Route::controller(PersonalController::class)->group(function () {
    // Index
    Route::get('personals/', 'index')->name('personals.index');

    // Create
    Route::get('personals/create', 'create')->name('personals.create');
    Route::post('personals', 'store')->name('personals.store');

    // Update
    Route::get('personals/{personal}/edit', 'edit')->name('personals.edit');
    Route::put('personals/{personal}', 'update')->name('personals.update');

    // Delete
    Route::delete('personals/{personal}', 'destroy')->name('personals.destroy');
});