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

</div>
  
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>  
<footer class="bg-dark text-center text-white">
  
    
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    Ing. Jesus Ricardo Ponce Guzmán
  </div>

</footer>

@endsection