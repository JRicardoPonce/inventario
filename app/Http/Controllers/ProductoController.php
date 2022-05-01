<?php

namespace App\Http\Controllers;

use App\Models\producto;
use App\Models\cat_categoria;
use App\Models\cat_sucursal;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['productos']= producto::paginate(3);
        return view('productos.index', $datos);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorias = Cat_categoria::all();
        $sucursales = Cat_sucursal::all();

        return view('productos.registrar', compact('categorias', 'sucursales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        //validación de campos o inputs
        $campos=[
               'nombreProducto'=>'required|string|max:30',
               'descripcion'=>'required|string|max:100',
               'categoria'=>'required|integer',
               'sucursal'=>'required|integer',
               'precio'=>'required|integer', 
               'fechaCompra'=>'required|date',
        ];

        $mensaje=[
            
                'required' => 'El :attribute es requerido'
        ];

        $this->validate($request, $campos, $mensaje);

        //$datosProducto=$request->all();
        $datosProducto=$request->except('_token');
        producto::insert($datosProducto);
        //return response()->json($datosProducto);
        return redirect('productos/bandeja')->with('mensaje', 'Producto agregado con exito!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        return view('productos.bandeja');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $producto = producto::findOrFail($id);
        return view('productos.editar', compact('producto'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        
        //
        $datosProducto=$request->except(['_token', '_method']);
        producto::where('id','=',$id)->update($datosProducto);  //si el id es igual en la base realiza actualizacion

        //se muestra y envia a formulario la informacion actualizada
        $producto = producto::findOrFail($id);
        //return view('productos.editar', compact('producto'));

        return redirect('productos')->with('mensaje', 'La información del producto fue actualizada!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
            producto::destroy($id);
            return redirect('productos')->with('mensaje', 'El producto fue eliminado');


    }
}
