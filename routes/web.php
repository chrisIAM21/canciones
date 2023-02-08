<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('canciones', function () {

    $canciones = [];
    $canciones[] = ['nombre' => 'Hola',
                    'artista' => 'Yo'];
    $canciones[] = ['nombre' => 'Adios',
                    'artista' => 'Alguien'];

    //dd($canciones, 'Hola'); //Es para debuguear por parte de laravel
    
    return view('canciones', compact('canciones'));
        //-> with(['canciones' => $canciones]);
});

Route::get('canciones/{id_cancion}', function ($id_cancion) {

    $canciones = [];
    $canciones[] = ['nombre' => 'Hola',
                    'artista' => 'Yo'];
    $canciones[] = ['nombre' => 'Adios',
                    'artista' => 'Alguien'];

    $cancion = $canciones[$id_cancion];

    return view('detalleCancion', compact('cancion'));
});

//Agregar todo a la misma ruta:
Route::get('canciones/{id_cancion?}', function ($id_cancion = null) {

    $canciones = [];
    $canciones[] = ['nombre' => 'Hola',
                    'artista' => 'Yo'];
    $canciones[] = ['nombre' => 'Adios',
                    'artista' => 'Alguien'];

    if(!is_null($id_cancion)){
        $cancion = $canciones[$id_cancion]
    }
    else{
        $cancion = null;
    }


    return view('canciones', compact('canciones','cancion'));
});