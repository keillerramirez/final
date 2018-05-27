<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Inventarios;

class InventariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

        public function index()
        {
         $datos=Inventarios::all();
        $data=array(
            "titulo"=>"Inventarios",
            "datos"=>$datos
        );
        return view('inventarios.index',compact('data'));
            }

    public function create()
    {
         $data=array(
            "titulo"=>"Crear Inventarios",
        );
        return view('inventarios.create',compact('data'));
    }

    public function store(Request $request)
    { 
        $inventarios= new Inventarios;
        $inventarios->descripcion=$request->descripcion;
        $inventarios->precio_compra=$request->precio_compra;
        $inventarios->precio_venta=$request->precio_venta;
        $inventarios->stock=$request->stock;
        $inventarios->stock_min=$request->stock_min;
        $inventarios->stock_max=$request->stock_max; 
        $inventarios->tipop_id=$request->tipop_id;
        $inventarios->save();
        return redirect('Inventarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $datos=Inventarios::findOrFail($id);
        $data=array(
            "titulo"=>"Inventarios",
            "datos"=>$datos
        );
        return view('inventarios.show',compact('data'));
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
