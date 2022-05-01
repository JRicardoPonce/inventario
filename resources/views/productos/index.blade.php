@extends('layouts.app')

@section('content')


<div class="container">


    
    @if(Session::has('mensaje'))
    
        <div class="alert alert-success alert-dismissible" role="alert">
            
            {{Session::get('mensaje')}}

            <button type="button" class="close" data-dismiss="alert" aria-label="close" >
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    
    @endif
    
    <!--<a href="{{ url('/productos/create') }}" class="btn btn-success">
        Registrar Nuevo Producto
    </a>-->
    <br/><br/>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nombre del producto</th>
                <th>Descripción</th>
                <th>Categoría</th>
                <th>Sucursal</th>
                <th>Precio</th>
                <th>fecha de compra</th>
            </tr>
        </thead>
        <tbody>
        @foreach($productos as $producto)    
            <tr>
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->nombreProducto }}</td>
                <td>{{ $producto->descripcion }}</td>
                <td>{{ $producto->categoria }}</td>
                <td>{{ $producto->sucursal }}</td>
                <td>{{ $producto->precio }}</td>
                <td>{{ $producto->fechaCompra }}</td>
                <td>
                    <a href="{{ url('/productos/'.$producto->id.'/edit') }}" class="btn btn-warning">
                    Editar 
                    </a>
                    |
                    <form action="{{ url('/productos/'.$producto->id ) }}" class="d-inline" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                        <input type="submit" class="btn btn-danger"  onclick="return confirm('¿seguro quiere eliminar el producto?')"  value="Eliminar">

                    </form>

                </td>
            </tr>
        @endforeach    
        </tbody>
    </table>
   {{ $productos -> links() }}
</div>
<br><br><br><br><br><br>   
<footer class="bg-dark text-center text-white">
  
    
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    Ing. Jesus Ricardo Ponce Guzmán
  </div>

</footer>

@endsection