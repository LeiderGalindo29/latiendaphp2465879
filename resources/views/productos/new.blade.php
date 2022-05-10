@extends('layouts.menu')

@section('contenido')

<br>
<br>
<div class="row">
    <h2 class="class">Nuevo Productos</h2>
</div>

<div class="row">

    <form class='col s8' method="POST" action="">

        <div class="row">
            <div class="input-field col s8">
                <input placeholder="Nombre de producto" type="text" id="nombre" name="nombre">
                <label for="nombre">Nombre de Producto</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s8">
                <textarea class="materialize-textarea" id="desc" name="desc"></textarea>
                <label for="desc">Descripcion</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s8">
                <input placeholder="Precio del producto" type="text" id="precio" name="precio">
                <label for="precio">Precio</label>
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
            </button>



    </form>
</div>
@endsection