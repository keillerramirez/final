<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Clientes;

class ClientesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $datos=Clientes::all();
        $data=array(
            "titulo"=>"Clientes",
            "datos"=>$datos
        );
        return view('clientes.index',compact('data'));
    }

    public function create()
    {
        $data=array(
            "titulo"=>"Crear Clientes",
        );
        return view('clientes.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes= new Clientes;
        $clientes->nombre=$request->nombre;
        $clientes->telefono=$request->telefono;
        $clientes->direccion=$request->direccion;
        $clientes->save();
        return redirect('Clientes');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datos=Clientes::findOrFail($id);
        $data=array(
            "titulo"=>"Clientes",
            "datos"=>$datos
        );
        return view('clientes.show',compact('data'));
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
