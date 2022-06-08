<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Producto;
use App\Http\Requests\StoreProductoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Seleccionar todos los productos en un arreglo
        $productos = Producto::all();
        //Mostrar la vista  del catalogo, llevandole los productos
        return view ('productos.index')->with('productos', $productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Seleccionar marcas en db: Model Marca
        $marcas = Marca::all();
        //Seleccionar marcas en db: Model Marca
        $categorias = Categoria::all();
        //Mostrar el formulario, enviando los datos
        return view('productos.create')
            ->with("marcas", $marcas)
            ->with("categorias", $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductoRequest $request)
    {
            //Validacion exitosa
            $p = new Producto();
            $p->nombre = $request->nombre;
            $p->desc = $request->desc;
            $p->precio = $request->precio;
            $p->marca_id = $request->marca;
            $p->categoria_id = $request->categoria;
            //Objeto file
            $archivo = $request->imagen;
            $p->imagen = $archivo->getClientOriginalName();
            //Ruta donde se almacena el archivo
            $ruta = public_path()."/img";
            //Movemos archivo a la ruta
            $archivo->move($ruta, $archivo->getClientOriginalName());
            //Mover el archivo cargado(Uploaded) a la carpeta public/img
            
            $p->save();
            return redirect('productos/create')->with('mensaje', "Producto registrado exitosamente!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show($productos)
    {
        //Seleccionar el producto a mostrar
        $p = Producto::find($productos);
        //Mostrar el detalle del producto
        //Enviandole el producto seleccionado
        return view('productos.details')->with('producto', $p);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit($productos)
    {
        echo "Aqui se muestra el formulario de editar producto";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $productos)
    {
        echo "Aqui se guarda el producto editado";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $productos)
    {
        echo "Aqui se van a eliminar los productos";
    }
}
