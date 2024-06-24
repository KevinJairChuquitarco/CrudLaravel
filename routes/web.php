<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioControlador;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/usuario', function () {
//     return view('usuario');
// });

Route::resource('usuarios', UsuarioControlador::class);
