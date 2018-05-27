<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Tipop;


class TipopController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
         $datos=Tipop::all();
        $data=array(
            "titulo"=>"Tipop",
            "datos"=>$datos
        );
        return view('tipop.index',compact('data'));
    }

    public function create()
    {
         $data=array(
            "titulo"=>"Crear Tipop",
        );
        return view('tipop.create',compact('data'));    }

   
    public function store(Request $request)
    {
         $tipop= new Tipop;
        $tipop->descripcion=$request->descripcion;
        $tipop->save();
        return redirect('Tipop');  
          }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $datos=Tipop::findOrFail($id);
        $data=array(
            "titulo"=>"Tipop",
            "datos"=>$datos
        );
        return view('tipop.show',compact('data'));
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
