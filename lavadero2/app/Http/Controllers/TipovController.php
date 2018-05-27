<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Tipov;

class TipovController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
         $datos=Tipov::all();
        $data=array(
            "titulo"=>"Tipov",
            "datos"=>$datos
        );
        return view('tipov.index',compact('data'));
    }

    public function create()
    {
         $data=array(
            "titulo"=>"Crear Tipov",
        );
        return view('tipov.create',compact('data'));    }

    
    public function store(Request $request)
    {
       $tipov= new Tipov;
        $tipov->descripcion=$request->descripcion;
        $tipov->save();
        return redirect('Tipov');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datos=Tipov::findOrFail($id);
        $data=array(
            "titulo"=>"Tipov",
            "datos"=>$datos
        );
        return view('tipov.show',compact('data'));
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
