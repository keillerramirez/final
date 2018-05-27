<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Tipol;

class TipolController extends Controller
{ 
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $datos=Tipol::all();
        $data=array(
            "titulo"=>"Tipol",
            "datos"=>$datos
        );
        return view('tipol.index',compact('data'));
    }

    public function create()
    {
         $data=array(
            "titulo"=>"Crear Tipol",
        );
        return view('tipol.create',compact('data'));    }

    public function store(Request $request)
    {
        $tipol= new Tipol;
        $tipol->descripcion=$request->descripcion;
        $tipol->save();
        return redirect('Tipol');
    }

    
    public function show($id)
    {
        $datos=Tipol::findOrFail($id);
        $data=array(
            "titulo"=>"Tipol",
            "datos"=>$datos
        );
        return view('tipol.show',compact('data'));
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
