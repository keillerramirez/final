<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Detalles;


class DetallesController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
         $datos=Detalles::all();
        $data=array(
            "titulo"=>"Detalles",
            "datos"=>$datos
        );
        return view('detalles.index',compact('data'));
    }

    public function create()
    {
         $data=array(
            "titulo"=>"Crear Detalles",
        );
        return view('detalles.create',compact('data'));    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $datos=Detalles::findOrFail($id);
        $data=array(
            "titulo"=>"Detalles",
            "datos"=>$datos
        );
        return view('detalles.show',compact('data'));
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
