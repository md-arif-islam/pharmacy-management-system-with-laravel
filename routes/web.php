<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\PharmacistController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SalesmanController;
use Illuminate\Support\Facades\Route;

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

Route::get( "/", [DashboardController::class, "dashboard"] )->name( "dashboard" );

Route::get( "/profile", [ProfileController::class, "profile"] )->name( "profile" );
Route::get( "/updateprofile", [ProfileController::class, "updateProfile"] )->name( "profile.update" );

Route::get( "/login", [LoginController::class, "login"] )->name( "login" );
Route::get( "/logout", [LoginController::class, "logout"] )->name( "logout" );
Route::post( "/authlogin", [LoginController::class, "authLogin"] )->name( "login.auth" );

Route::get( "/managers", [ManagerController::class, "allManagers"] )->name( "managers.show" );
Route::get( "/managers/add", [ManagerController::class, "addManager"] )->name( "managers.add" );
Route::post( "/managers/create", [ManagerController::class, "createManager"] )->name( "managers.create" );
Route::get( "/managers/{manager}/edit", [ManagerController::class, "editManager"] )->name( "managers.edit" );
Route::post( "/managers/{manager}", [ManagerController::class, "updateManager"] )->name( "managers.update" );
Route::delete( "/managers/{manager}", [ManagerController::class, "deleteManager"] )->name( "managers.delete" );

Route::get( "/pharmacists", [PharmacistController::class, "allPharmacists"] )->name( "pharmacists" );
Route::get( "/addpharmacists", [PharmacistController::class, "addPharmacist"] )->name( "pharmacists.add" );
Route::get( "/updatepharmacist", [PharmacistController::class, "updatePharmacist"] )->name( "pharmacists.update" );

Route::get( "/salesmen", [SalesmanController::class, "allSalesmen"] )->name( "salesmen" );
Route::get( "/addsalesmen", [SalesmanController::class, "addSalesman"] )->name( "salesmen.add" );
Route::get( "/updatepharmacist", [SalesmanController::class, "updateSalesman"] )->name( "salesmen.update" );
