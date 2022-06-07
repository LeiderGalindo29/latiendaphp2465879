@extends('layouts.menu')

@section('contenido')

<style>



</style>

<!--<img class="contenedor" src="../public/img/b.jpg" />-->
<div class="row" id="abc">
    <h1> Catalogo de productos</h1>
</div>
<hr><br>

@foreach($productos as $producto)
<div class="row">
    <div class="col s3">
        <div class="card">
            <div class="card-image">
                @if( $producto->imagen === null)
                <img src="{{ asset('img/nodispo.PNG' ) }}" alt=""/>             
                @else
                @endif
                <img src="{{ asset('img/'.$producto->imagen ) }}" alt=""/><br>
                <span class="card-title">{{$producto->nombre}}</span><br><br>
            </div>
            <div class="card-content">
            <p>{{ $producto->desc }}</p>
            </div>
            <div class="card-action"><a href="{{ route('productos.show', $producto->id)}}">VER DETALLES
                </a>
            </div>
        </div>
    </div>
</div>

@endforeach


@endsection
