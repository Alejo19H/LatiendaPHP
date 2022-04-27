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

//Primera ruta
//Clase Route->metodo get
Route::get('paises', function () {
    $paises = [
        "Colombia" => [ 
            "cap" => "Bogota", 
            "mon" => "Peso Colombiano",
            "pob" => "50'880.000",
            "ciudades" => [
                "Ibagué",
                "Medellin",
                "Cali"
            ]
        ],
        "Peru" => [
            "cap" => "Lima", 
            "mon" => "Soles",
            "pob" => "32'970.000",
            "ciudades" => [
                "Ayacucho",
                "Cusco",
                "Arequipa"
            ]
        ], 
        "Paraguay" => [
            "cap" => "Asuncion", 
            "mon" => "Guaraní paraguayo",
            "pob" => "7'133.000",
            "ciudades" => [
                "Ciudad del Este",
                "Encarnacion",
                "Areguá"
            ]
        ],
        "Ecuador" => [ 
            "cap" => "Quito", 
            "mon" => "Dolar",
            "pob" => "17'400.000",
            "ciudades" => [
                "Guayaquil",
                "Ibarra"
            ]
        ],
        "Brasil" => [
            "cap" => "Brasilia", 
            "mon" => "Reales",
            "pob" => "212'600.000",
            "ciudades" => [
                "Sao Paulo",
                "Rio de Janeiro",
                "Belo Horizonte"
            ]   
        ]   
    ];

    return view('Paises') ->with('paises', $paises);
}) ;
