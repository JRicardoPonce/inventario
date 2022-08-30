<h1>
    {{ $modo }} Producto
</h1>
@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
    <ul> 
        @foreach($errors->all() as $error)

            <li>{{ $error }}</li>

         @endforeach
    </ul>
    </div>
@endif

@if($modo==='Editar')

    <div class="form-group">
        <label for="nombreProducto">    Nombre del producto</label>
        <input type="text" readonly class="form-control" name="nombreProducto" value="{{ isset($producto->nombreProducto)?$producto->nombreProducto:old('nombreProducto') }}" id="nombreProducto">
    </div> 
    <div class="form-group">
        <label for="descripcion">    Descripción del Porducto</label>
        <input type="text" readonly class="form-control" name="descripcion" value="{{ isset($producto->descripcion)?$producto->descripcion:old('descripcion') }}" id="descripcion">
    </div> 
    <div class="form-group">
        <label for="categoria">    Categoría</label>
        <input type="text" readonly class="form-control" name="categoria"  value="{{ isset($producto->categoria)?$producto->categoria:old('categoria') }}" id="categoria">
    </div>
    <div class="form-group">
        <label for="sucursal">    Sucursal</label>
        <input type="text" readonly class="form-control" name="sucursal" value="{{ isset($producto->sucursal)?$producto->sucursal: old('sucursal') }}" id="sucursal">
    </div>    
    <div class="form-group">
        <label for="precio">    Precio</label>
        <input type="text" readonly class="form-control" name="precio" value="{{ isset($producto->precio)?$producto->precio:old('precio') }}" id="precio">
    </div>
    <div class="form-group">
        <label for="fechaCompra">    Fecha de Compra</label>
        <input type="date" readonly class="form-control"  name="fechaCompra" value="{{ isset($producto->fechaCompra)?$producto->fechaCompra:old('fechaCompra') }}" id="fechaCompra">
    </div>
    
    <div class="form-group">
        <label for="estado">    Estado</label>
        <select name="estado" id="estado" class="form-control" value="{{ isset($producto->estado)?$producto->estado:old('estado') }}"  required >
            <option value="" selected>Selecciona una opción...</option>
            <option value="0">Abierto</option>
            <option value="1">Cerrado</option>

        </select>
    </div>
    <div class="form-group">
            <label for="comentarios">    comentarios</label>
            <input type="textarea" required class="form-control" name="comentarios" value="{{ isset($producto->comentarios)?$producto->comentarios:old('comentarios') }}" id="comentarios" maxlength="100" requiered>
    </div>
    

    <br>
        <input class="btn btn-success" type="submit" value="Guardar Cambios">

        <a class="btn btn-primary" href="{{ url('/productos') }}">
                  Regresar
        </a>
    <br><br>
@endif

<!--si modo es registrar-->
@if($modo==='Registrar')
        <div class="form-group">
            <label for="nombreProducto">    Nombre del producto</label>
            <input type="text" class="form-control" name="nombreProducto" value="{{ isset($producto->nombreProducto)?$producto->nombreProducto:old('nombreProducto') }}" id="nombreProducto" maxlength=30 required>
        </div> 
        <div class="form-group">
            <label for="descripcion">    Descripción del Porducto</label>
            <input type="text" class="form-control" name="descripcion" value="{{ isset($producto->descripcion)?$producto->descripcion:old('descripcion') }}" id="descripcion" maxlength=100 required>
        </div> 
        <div class="form-group">
            <label for="categoria">    Categoría</label>
            <select name="categoria" id="categoria" class="form-control" required>
                <option value="">Selecciona Categoria...</option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria['id'] }}">{{ $categoria['categoria'] }}</option>
                @endforeach
            </select> 
        </div>
        <div class="form-group">
            <label for="sucursal">    Sucursal</label>
            <select name="sucursal" id="sucursal" class="form-control" required>
                <option value="">Selecciona Sucursal...</option>
                @foreach ($sucursales as $sucursal)
                    <option value="{{ $sucursal['id'] }}">{{ $sucursal['sucursal'] }}</option>
                @endforeach
            </select>
        </div>    
        <div class="form-group">
            <label for="precio">    Precio</label>
            <input type="text" class="form-control" name="precio" value="{{ isset($producto->precio)?$producto->precio:old('precio') }}" id="precio" maxlength="5" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>
        </div>
        <div class="form-group">
            <label for="fechaCompra">    Fecha de Compra</label>
            <input type="date" class="form-control"  name="fechaCompra" value="{{ isset($producto->fechaCompra)?$producto->fechaCompra:old('fechaCompra') }}" id="fechaCompra" required>
        </div>
            <input type="hidden" name="estado" id="estado" value="0" >
            <input type="hidden" name="comentarios" value="{{ isset($producto->comentarios)?$producto->comentarios:'0' }}" id="comentarios" value="Null" >
        <br>
        
            <input class="btn btn-success" type="submit" value=" {{ $modo }}">

            <a class="btn btn-primary" href="{{ url('/productos/show') }}">
                    Regresar
            </a>
        <br><br>
@endif
<!--termina modo registrar-->
<footer class="bg-dark text-center text-white">
  
   <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
           Ing. Jesus Ricardo Ponce Guzmán
   </div> 
        
</footer>