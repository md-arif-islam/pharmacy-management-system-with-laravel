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

Route::middleware( ['guest'] )->group( function () {
    Route::get( "/login", [LoginController::class, "login"] )->name( "login" );
    Route::post( "/authlogin", [LoginController::class, "authLogin"] )->name( "login.auth" );
} );

Route::middleware( ["auth"] )->group( function () {
    Route::get( "/", [DashboardController::class, "dashboard"] )->name( "dashboard" );
    Route::post( "/logout", [LoginController::class, "logout"] )->name( "logout" );

    Route::get( "/profile", [ProfileController::class, "profile"] )->name( "profile.show" );
    Route::get( "/profile/edit", [ProfileController::class, "editProfile"] )->name( "profile.edit" );
    Route::put( "/profile/{user}", [ProfileController::class, "updateProfile"] )->name( "profile.update" );

    Route::get( "/managers", [ManagerController::class, "allManagers"] )->name( "managers.show" );
    Route::group( ['middleware' => 'can:isAdmin'], function () {
        Route::get( "/managers/add", [ManagerController::class, "addManager"] )->name( "managers.add" );
        Route::post( "/managers/create", [ManagerController::class, "createManager"] )->name( "managers.create" );
        Route::get( "/managers/{manager}/edit", [ManagerController::class, "editManager"] )->name( "managers.edit" );
        Route::post( "/managers/{manager}", [ManagerController::class, "updateManager"] )->name( "managers.update" );
        Route::delete( "/managers/{manager}", [ManagerController::class, "deleteManager"] )->name( "managers.delete" );
    } );

    Route::get( "/pharmacists", [PharmacistController::class, "allPharmacists"] )->name( "pharmacists.show" );
    Route::group( ['middleware' => 'can:isAdminOrManager'], function () {
        Route::get( "/pharmacists/add", [PharmacistController::class, "addPharmacist"] )->name( "pharmacists.add" );
        Route::post( "/pharmacists/create", [PharmacistController::class, "createPharmacist"] )->name( "pharmacists.create" );
        Route::get( "/pharmacists/{pharmacist}/edit", [PharmacistController::class, "editPharmacist"] )->name( "pharmacists.edit" );
        Route::post( "/pharmacists/{pharmacist}", [PharmacistController::class, "updatePharmacist"] )->name( "pharmacists.update" );
        Route::delete( "/pharmacists/{pharmacist}", [PharmacistController::class, "deletePharmacist"] )->name( "pharmacists.delete" );
    } );

    Route::get( "/salesmen", [SalesmanController::class, "allSalesmen"] )->name( "salesmen.show" );
    Route::group( ['middleware' => ['can:isAdminOrManagerOrPharmacist']], function () {
        Route::get( "/salesmen/add", [SalesmanController::class, "addSalesman"] )->name( "salesmen.add" );
        Route::post( "/salesmen/create", [SalesmanController::class, "createSalesman"] )->name( "salesmen.create" );
        Route::get( "/salesmen/{salesman}/edit", [SalesmanController::class, "editSalesman"] )->name( "salesmen.edit" );
        Route::post( "/salesmen/{salesman}", [SalesmanController::class, "updateSalesman"] )->name( "salesmen.update" );
        Route::delete( "/salesmen/{salesman}", [SalesmanController::class, "deleteSalesman"] )->name( "salesmen.delete" );
    } );
} );
