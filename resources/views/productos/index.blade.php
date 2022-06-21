@extends('layouts.menu')

@section('contenido')

<!--<img class="contenedor" src="../public/img/b.jpg" />-->
@if(session('mensajes'))
<div class="row">
    <strong>
        {{ session('mensajes') }}
        <a href="{{ route('cart.index')}}"> Ir al carrito</a>
    </strong>
</div>
@endif

<div class="row" id="abc">
    <h1> Catalogo de productos</h1>
</div>
<hr><br>

@foreach($productos as $producto)
<div>
    <div class="col s8">
        <div class="card">
        <style>
            .card{
                width: 30%;
            }
        </style>
            <div class="card-image">
                @if( $producto->imagen === null)
                <img src="{{ asset('img/nodispo.PNG' ) }}" alt="">             
                @else
                <img src="{{ asset('img/'.$producto->imagen ) }}" alt="">
                @endif
                </div>
                <span class="card-title">{{$producto->nombre}}</span><br><br>
            <div class="card-content">
            <p>{{ $producto->desc }}</p>
            </div>
            <div class="card-action">
                <a href="{{ route('productos.show', $producto->id)}}">VER DETALLES
                </a>
            </div>
        </div>
    </div>
</div>

@endforeach


@endsection
