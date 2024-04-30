<?php

use Illuminate\Support\Facades\Route;

// Definieer de resource-routes voor video's en rollen
Route::resource('videos', VideoController::class);
Route::resource('roles', RoleController::class);


// De rootroute kan apart worden gedefinieerd
Route::get('/', function () {
    return view('welcome');
});

