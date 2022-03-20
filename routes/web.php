<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SingUpController;
use App\Http\Controllers\PaimentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\NosVehiculeController;



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
Route::get('welcome', function () {
    return view('/auth/welcome');
});
Route::post('create',[SingUpController::class,'store']);

Route::get('login', function () {
    return view('auth/login');
});
Route::post('check',[LoginController::class,'check']);
Route::get('accueil', function () {
    return view('client.accueil');
});
Route::get('accadmin', function () {
    return view('admin.accadmin');
});
Route::get('contactez', function () {
    return view('client.contactez');
});
Route::get('view', [CrudController::class,'view']);
Route::get('crud', [CrudController::class,'crud']);
Route::get('crud', [CrudController::class,'crud']);
Route::post('insert',[CrudController::class,'store']);
Route::get('view', [CrudController::class,'show']);
Route::get('edit/{idVoiture}', [CrudController::class,'datashow']);
Route::post('update', [CrudController::class,'update'])->name('update');
Route::get('del/{idVoiture}', [CrudController::class,'delete']);
Route::get('index', [IndexController::class,'index']);
Route::get('nosVehicule', [NosVehiculeController::class,'show']);
Route::get('profile/{username}', [ProfileController::class,'show']);
Route::get('vehadmin', [VehiculeController::class,'show']);
Route::get('profile/modif/{id}', [ProfileController::class,'datashow']);
Route::post('modifier', [ProfileController::class,'modifier'])->name('modifier');
Route::get('profile/supprimer/{id}', [ProfileController::class,'supprimer']);
Route::get('profile/retour/{id}', [ProfileController::class,'retour']);
Route::get('payment', [PaimentController::class,'index']);
Route::get('payment/{idVoiture}', [PaimentController::class,'show']);
Route::post('payer', [CommandeController::class,'store']);
Route::get('commande', [CommandeController::class,'show']);
Route::get('payva', function () {
    return view('payment/payvalid');
});
