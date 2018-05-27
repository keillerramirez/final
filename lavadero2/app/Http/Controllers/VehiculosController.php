<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Vehiculos;
use App\Clientes;

class VehiculosController extends Controller
{
   
    public function index()
    {
         $datos=Vehiculos::all();
         //dd($datos);
    
        return view('vehiculos.index',compact('datos'));
    }

   
    public function create()
    {
       $cliente = Clientes::orderBy('id', 'desc')->pluck('nombre', 'id');
        return view('vehiculos.create',compact('cliente'));
    }

 
    public function store(Request $request)
    {
        $vehiculos= new Vehiculos;
        $vehiculos->clientes_id=$request->clientes_id;
        $vehiculos->placa=$request->placa;
        $vehiculos->save();
        return redirect('Vehiculos');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datos=Vehiculos::findOrFail($id);
        $data=array(
            "titulo"=>"Vehiculos",
            "datos"=>$datos
        );
        return view('vehiculos.show',compact('data'));
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
