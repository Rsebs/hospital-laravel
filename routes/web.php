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

// Route::view('url', 'viewName') muestra una vista estatica, es decir, sin necesidad de conectarse a la base de datos
Route::view('about-us', 'aboutUs')->name('aboutUs');

Route::controller(SessionController::class)->group(function () {
    Route::get('session/login', 'login')->name('session.login');
    Route::get('session/sign-up', 'createAccount')->name('session.signUp');
});

/*
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
*/

Route::resource('patients', PatientController::class);
Route::resource('personals', PersonalController::class);