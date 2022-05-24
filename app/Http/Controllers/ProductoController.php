<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "<h1>Aqui va a ir el catalogo de productos</h1>";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = Marca::all();
        $categorias = Categoria::all();
        //seleccionar categorias imagenes
        return view('productos.new')
            ->with('marcas', $marcas)
            ->with('categorias', $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {

        //definir reglas de validacion
        $reglas = [
            "nombre" => 'required|alpha',
            "desc" => 'required|max:50',
            "precio" => 'required|numeric',
            "marca" => 'required',
            "categoria" => 'required'

        ];
        //mensajes personalizados por regla
        $mensajes = [
            "required"=>"Campo obligatorio",
            "numeric"=>"Solo numeros",
            "alpha"=>"Solo letras"
        ];
        //crear objeto validador
        $v = Validator::make($r->all(), $reglas, $mensajes);

        //validar los datos fails()
        //metodo fails():retorna true, caso de que la validacion fallida
        //retorna falsom en caso de que la validacion sea true

        if ($v->fails()) {
            //Si la validacion falla
            //redireccionar al formulario de nuevo producto
            return redirect('productos/create')
                ->withErrors($v)
                ->withInput();

            //var_dump($v->errors());

        } else {
            //Si la Validacion es correcta
            //registra producto
            //crear entidad de producto
            $p = new Producto;
            //signar valores de nuevos productos
            $p->nombre = $r->nombre;
            $p->desc = $r->desc;
            $p->precio = $r->precio;
            $p->marca_id = $r->marca;
            $p->categoria_id = $r->categoria;

            //grabar el nuevo producto
            $p->save();

            //redireccionar a la ruta create
            return redirect('productos/create')
                ->with('mensaje', 'Producto registrado');



            //redireccionar a la ruta create
            return redirect('productos/create')
                ->with('mensaje', 'Producto registrado');
            // echo "producto creado";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($producto)
    {
        echo "<h1>Aqui va las informacion de producto cuyo id es: $producto</h1>";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($producto)
    {
        echo "<h1>Aqui va el formulario de edicion del producto cuyo id es: $producto</h1>";
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
        //
    }
}
