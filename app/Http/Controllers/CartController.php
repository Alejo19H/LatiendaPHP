<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if( !session('cart')){
            echo "No hay items en el carrito";
        }else{
            return view('cart.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Persistir los datos de sesion
        $producto = [
            [
                "prod_id" => $request->prod_id,
                "cantidad" => $request->cantidad,
                "nombre_prod" => Producto::find($request->prod_id)->nombre
            ]
        ];

        //Meter los datos en una session
        if ( !session('cart')) {
            $aux[] = $producto;
            //El primer producto en el carrito
            session(['cart' => $aux]);
        } else {
            
            //Extraer los datos del carrito de la variable de sesion
            $aux = session('cart');
            //Eliminar la variable de sesión:
            session()->forget('cart');
            //Agregar el nuevo producto a los ya existentes
            $aux[] = $producto;
            //Volver a crear  la variable de sesion con el nuevo producto
            session(['cart' => $aux]);
        };
        //Redireccion al catalogo de productos
        //Con mensaje de añadido al carrito
        return redirect('productos')->with("mensaje" , "Producto añadido");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
