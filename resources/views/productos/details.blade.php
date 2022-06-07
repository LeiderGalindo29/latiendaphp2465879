@extends('layouts.menu')

@section('contenido')

<div class="row">
    <h1>{{ $producto->nombre }}</h1>
</div>
<img src="{{ asset('img/'.$producto->imagen ) }}" alt=""/><br>
<div class="row">
<div class="col s3">
    <p> Marca : {{ $producto->marca->nombre}}</p>
    <p> Categoria : {{ $producto->categoria->nombre}}</li>
    <ul>
        <li>Precio : {{ $producto->precio}}</li><br>
        <li>Descripcion : {{ $producto->desc}}</li>
        
    </ul>
 </div>     
<div class="col s1"></div>    <br><br><br><br><br>
    <div class="row">
        <h3 style="float: right">Añadir al carrito</h3>
    </div>
    <div style="float: right; margin-bottom: 100px;"class="row">
        <form action="{{route('cart.store')}}" method="POST">
            @csrf
            <input type="hidden" name="prod_id" value="{{ $producto->id }}">
            <div class="row">
                <div  class="col s4 input-field">
                    <select  name="cantidad" id="cantidad">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <label for="cantidad">Cantidad</label>
                </div>
                <div>
                <br><br>
                </div>
            </div>
<div class="row">
            <button class="btn waves-effect black" type="submit" name="action">Añadir
            </button>
        </form>
    </div>
</div>

@endsection