<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Producto;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Pedidos = Pedido::all();
       return view('viewsprivadas.pedidos', compact('Pedidos'));
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
        $request->Estado = 'Nuevo';
        $request->validate([
            'id_Producto' => 'required',
            'id_Proovedor' => 'required',
            'Cantidad' => 'required',
            'Valor' => 'required',
            'id_Proovedor' => 'required',
            
          ]);

          Pedido::create($request->all());
          return redirect('Formularios');
  

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

    public function Confirmar($id)
    {
        $Producto = Pedido::findOrFail($id);
        $Producto->Estado = 'Confirmado';
        $Producto->update();
        return redirect('Pedidos');
    }

    public function Enviado($id)
    {
        $Producto = Pedido::findOrFail($id);
        $Producto->Estado = 'Enviado';
        $Producto->update();
        return redirect('Pedidos');
    }

    public function Recibido($id)
    {
        $Producto = Pedido::findOrFail($id);
        $Producto->Estado = 'Recibido';
        $Producto->update();
        return redirect('Pedidos');
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
        $Pedido = Pedido::findOrFail($id);
        $Pedido->delete();
        return redirect('Pedidos');
    }
}
