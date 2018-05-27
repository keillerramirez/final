<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Lavados;

class LavadosController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
         $datos=Lavados::all();
        $data=array(
            "titulo"=>"Lavados",
            "datos"=>$datos
        );
        return view('lavados.index',compact('data'));
    }

    public function create()
    {
         $data=array(
            "titulo"=>"Crear Lavados",
        );
        return view('lavados.create',compact('data'));
    }

    public function store(Request $request)
    {
     $lavados= new Lavados;
        $lavados->tipol_id=$request->tipol_id;
        $lavados->tipov_id=$request->tipov_id;
        $lavados->costo=$request->costo;
        $lavados->save();
        return redirect('Lavados');
    }

    public function show($id)
    {
            $datos=Lavados::findOrFail($id);
        $data=array(
            "titulo"=>"Lavados",
            "datos"=>$datos
        );
        return view('lavados.show',compact('data'));
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
