@extends('layouts.menu')

@section('contenido')

<div class="row">
    <h1>{{ $producto->nombre }}</h1>
</div>
<div class="row">
    <div class="col s8">
    <div class="card-image">
    @if( $producto->imagen === null)
                <img src="{{ asset('img/nodispo.png' ) }}" alt="">             
                @else
                <img src="{{ asset('img/'.$producto->imagen ) }}" alt="">
                @endif
                </div>
    <p> Marca : {{ $producto->marca->nombre}}</p>
    <p> Categoria : {{ $producto->categoria->nombre}}</li>
    <ul>
        <li>Precio : {{ $producto->precio}}</li><br>
        <li>Descripcion : {{ $producto->desc}}</li>
        
    </ul>
 </div>     
<div class="col s4">   <br><br><br>
    <div class="row">
        <h1>Añadir al carrito</h2>
    </div>
        <form action="{{route('cart.store')}}" method="POST">
            @csrf
            <input type="hidden" name="prod_id" value="{{ $producto->id }}">
            <input type="hidden" name="prod_nom" value="{{ $producto->nombre }}">
            
            <div class="row">
                <div  class="col s4 input-field">
                    <select  name="cantidad" id="cantidad">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <label for="cantidad">Cantidad</label>
                </div>
                <input type="hidden" name="prod_precio" value="{{ $producto->precio }}">
                <div>
            <button class="btn waves-effect black" type="submit" name="action">
                <i class="material-icons right">Añadir</i>
            </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection