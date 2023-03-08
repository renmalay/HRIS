<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Smartpay\GeneralSetup\GlobalSettings;
use App\Http\Livewire\Smartpay\GeneralSetup\Location;
use App\Http\Livewire\Smartpay\GeneralSetup\GeneralSetupMain;
use App\Http\Livewire\Smartpay\HrisSetup\HrisSetupMain;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/smartpay/general-setup', GeneralSetupMain::class);


Route::get('/smartpay/hris-setup', HrisSetupMain::class);

// Route::get('/smartpay/global', GlobalSettings::class);
// Route::get('/smartpay/location', Location::class);