<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Facturaciones;

class FacturacionesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    public function index()
    {
         $datos=Facturaciones::all();
        $data=array(
            "titulo"=>"Facturaciones",
            "datos"=>$datos
        );
        return view('facturaciones.index',compact('data'));
    }

    public function create()
    {
       $data=array(
            "titulo"=>"Crear Facturaciones",
        );
        return view('facturaciones.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $facturaciones= new Facturaciones;
        $facturaciones->fecha=$request->fecha;
        $facturaciones->clientes_id=$request->clientes_id;   
        $facturaciones->save();
        return redirect('Facturaciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $datos=Facturaciones::findOrFail($id);
        $data=array(
            "titulo"=>"Facturaciones",
            "datos"=>$datos
        );
        return view('facturaciones.show',compact('data'));
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
