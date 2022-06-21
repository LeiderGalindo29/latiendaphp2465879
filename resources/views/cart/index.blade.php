@extends('layouts.menu')


@section('contenido')

<div class="row">
    <h1> Carrito de compras</h1>
</div>
@if(session('cart'))
<div class="row">
    <div class="clo s8">
        <table>
            <thead>
                <tr>
                    <th>Nombre de producto</th>
                    <th>Cantidad</th>
                    

                </tr>
            </thead>
            <tbody>
                @foreach(session('cart') as $producto)
            <tr>
                <td>{{$producto[0]["nombre"]}}</td>
                <td>{{$producto[0]["cantidad"]}}</td>
                
            </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@else
<strong>
No hay items en el carrito
</strong>
@endif
<div class="row">
    <form method="POST" action="{{ route('cart.destroy', 1)}}">
        @method('DELETE')
        @csrf
    <div class="row">
            <button class="btn waves-effect black" type="submit" >Eliminar carrito
            </button><br><br>

    </form>

</div>


@endsection