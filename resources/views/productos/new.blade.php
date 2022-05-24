@extends('layouts.menu')

@section('contenido')

<br>



<div class="row">
    <h2 class="class">Nuevo Productos</h2>
</div>

<div class="row">

    <form class='col s8' method="POST" action="{{url('productos') }}">
        @csrf

        <div class="row">
            <div class="input-field col s8">
                <input placeholder="Nombre de producto" type="text" id="nombre" name="nombre" value="{{old('nombre')}}">
                <label for="nombre">Nombre de Producto</label>
                <span>{{ $errors->first('nombre')}}</span>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s8">
                <textarea class="materialize-textarea" type="text" id="desc" name="desc" >{{old('desc')}}</textarea>
                <label for="desc">Descripcion</label>
                <span>{{ $errors->first('desc')}}</span>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s8">
                <input placeholder="Precio del producto" type="text" id="precio" name="precio" value="{{old('precio')}}">   
                <label for="precio">Precio</label>
                <span>{{ $errors->first('precio')}}</span>
            </div>
        </div>

        <div class="row">
            <div class="col s8 input-field">
                <select name="marca" id="marca">
                    <option value="">Eliga la Marca</option>
                    @foreach($marcas as $marca)
                    <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                    @endforeach
                </select>
                <label for="marca">Marca</label>
                <span>{{ $errors->first('marca')}}</span>

            </div>
        </div>

        <div class="row">
            <div class="col s8 input-field">
                <select name="categoria" id="categoria">
                <option value="">Eliga la categoria</option>
                    @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
                <label for="categoria">Categorias</label>
                <span>{{ $errors->first('categoria')}}</span>
            </div>
        </div>

        <div class="row">
            <div class="file-field input-field col s8">
                <div class="btn">
                    <span>Cargar</span>
                    <input type="file">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>
        </div>
        <div class="row">
            <button class="btn waves-effect black" type="submit" name="action">Enviar
            </button><br><br>

            @if(session('mensaje'))
            <div class="row">
                {{ session('mensaje') }}
            </div>
            @endif

    </form>
</div>
@endsection