<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FichaControlador;

Route::get('/', function () {
    return view('welcome');
});

/**Rutas CRUD Fichas Tecnicas */
Route::resource('/ficha', FichaControlador::class);
/**Rutas CRUD Fichas Tecnicas */
