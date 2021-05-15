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


Route::get('prueba', function () {
    echo "<a href=" . route('saludo') . ">Contacto</a></br>";
});


Route::get('/', function () {
    $valor = "Rolando";
    return view('home',compact(['$valor']));
});

Route::get('contacto', function () {
    return "Hola desde la pagina homedsdv ";
});

Route::get('saludos/{f?}', function ($f = "Invitado") {
    return "Saludos $f";
});

//la funcion route permite poner el nombre de la routa
Route::get('prueba', function () {
    echo "<a href=" . route('saludoss') . ">Contacto</a></br>";
});


//Primero viene el nombre de la routa en la
//variable as definimos como lo llamamos
//por el nombre qeu
//es la mejor forma para llamar las routas

Route::get('saludo/{f?}', ["as" => "saludoss", function ($f = "Invitado") {
    return "Saludos $f";
}]);
