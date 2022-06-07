<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

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

//ruta paises
Route::get('paises' , function(){
    $paises=["colombia" => [    
                    "capital" => "Bogota",
                    "moneda" => "peso",
                    "poblacion" => 10.55,
                    "ciudades"=>
                        ["Medellin",
                        "cali",
                        "Barranquilla"]
            ], 
             "argentina"  => [
                    "capital" => "Buenos Aires",
                    "moneda" => "Peso argentino",
                    "poblacion" => 45.38,
                     "ciudades"=>[
                            "Buenos Aires",
                            "Rosario",
                            "La Plata"]
                        ],
             "venezuela"  => [ 
                 "capital" => "Caracas",
                  "moneda" => "Bolivares",
                  "poblacion" => 28.44, 
                  "ciudades"=>[ 
                      "Valencia",
                      "Caracas",
                      "Barinas"]
                    ]
              ];


return view('paises')->with("paises" , $paises);



});


Route::get('prueba', function(){
return view('productos.new');


});

//mostrar vista de paises

Route::resource('productos',
                ProductoController::class);
Route::resource('cart',
                CartController::class,['only' => ['store', 'destroy', 'index']]);




