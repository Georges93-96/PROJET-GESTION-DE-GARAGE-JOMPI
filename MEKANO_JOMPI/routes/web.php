<?php

use App\Http\Controllers\ReparationsController;
use App\Http\Controllers\TechniciensController;
use App\Http\Controllers\VehiculeController;
use App\Models\Reparations;
use App\Models\Techniciens;
use App\Models\vehicule;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("home");
})->name("home");
Route::get("/accueil", function () {
    return view("accueil");
    });
    Route::get("/about", function () {
    return view("about");
    })->name("about");
    //Route des Vehicules
Route::controller(vehiculeController::class)->group(function ()  {
    Route::get("/vehicules", "index")-> name("vehicules.index");
    Route::get("/vehicules/show/{id}","show")->name("vehicules.show");
    Route::get("/vehicules/create", "create")-> name("vehicules.create");
    Route::post("/vehicules", "store")-> name("vehicules.store");
    Route::get('/vehicules/{id}/edit', 'edit')->name('vehicules.edit');
    Route::put('/vehicules/{id}', 'update')->name('vehicules.update');
    Route::delete('/vehicules{id}', 'destroy')->name('vehicules.destroy');
    Route::get('vehicules/search','search')->name('search');

})  ;

//Route des Techniciens
Route::controller(TechniciensController::class)->group(function ()  {
    Route::get("/techniciens", "index")-> name("techniciens.index");
    Route::get("/techniciens/show/{id}","show")->name("techniciens.show");
    Route::get("/techniciens/create", "create")-> name("techniciens.create");
    Route::post("/techniciens", "store")-> name("techniciens.store");
    Route::get('/techniciens/{id}/edit', 'edit')->name('techniciens.edit');
    Route::put('/techniciens/{id}', 'update')->name('techniciens.update');
    Route::delete('/techniciens/{id}', 'destroy')->name('techniciens.destroy');
    Route::get('techniciens/search','search')->name('techniciens.search');

})  ;
//reparations route
Route::get('/reparations', [ReparationsController::class, 'index'])->name('reparations.index');
Route::post('/reparations', [ReparationsController::class, 'store'])->name('reparations.store');


 