<?php

namespace App\Http\Controllers;

use App\Models\Nombre;
use Illuminate\Http\Request;

class NombreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lista=Nombre::all();
        return view('lista',['lista'=>$lista]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nombre = new Nombre();
        $nombre->nombre=$request->nombre;
        $nombre->apellido=$request->apellido;
        $nombre->email=$request->email;
        $nombre->contrasena=$request->contrasena;
        $nombre->save();
        return 'se guardo el usuario';
    }

    /**
     * Display the specified resource.
     */
    public function show(Nombre $nombre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nombre $nombre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nombre $nombre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nombre $nombre)
    {
        //
    }
}
