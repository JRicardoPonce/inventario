@extends('layouts.app')

@section('content')
<div class="container">

    @csrf
    <form action="{{ url('/productos/'.$producto->id ) }}" method="post">
        @csrf
        {{ method_field('PATCH') }}

        @include('productos.form', ['modo'=>'Editar']);

    </form>

</div>
@endsection