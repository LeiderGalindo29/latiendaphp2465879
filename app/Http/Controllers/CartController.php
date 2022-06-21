<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mostrar varible de session
        //cart
        return view('cart.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
           
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //echo "<pre>";
        //var_dump($request->all());
        //echo "</pre>";
        //estructurar la info del producto
        $producto = [
            [
            "nombre" => $request->prod_nom,
            "id" => $request->prod_id,
            "cantidad" => $request->cantidad,
            //"precio" => $request->precio
           ] 
        ];

        if (!session('cart')) {
            //creat el estado de session cart
            $auxiliar[] = $producto;
            session(['cart' => $auxiliar]);
        }
        else{
            //existe la variable de la sesion
            $auxiliar = session('cart');
            //agregar el nuevo item al arreglo
            $auxiliar[] = $producto;
            //volver a crear la session 'cart'
            //con el contenido añadido
            session(['cart' => $auxiliar]);
        }

        //redireccionar al catalogo 
        //con mensaje de exito
        return redirect('productos')
        ->with('mensajes','producto añadido al carrito');
        //crear el estado de la sesion 'cart'
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //echo "eliminar carrito";
        session()->forget('cart');
        return redirect('cart')->with('mensaje',"Carro eliminado");
    }
}
