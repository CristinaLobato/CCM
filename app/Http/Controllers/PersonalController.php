<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personal = Personal::all();
        return view('personal.index', ['personal'=>$personal]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('personal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'apellido1'=> 'required',
            'apellido2'=>'',
            'sexo'=> 'required',
            'regimen'=> 'required',
            'area'=> 'required',
            'departamento'=> 'required',
            'fecha_incorporacion'=> 'required',
            'nif'=> 'required',
            'correo'=> 'required',
        ]);

        $newPersonal = Personal::create($data);
        return redirect(route('personal.index'));

        
    }

    /**
     * Display the specified resource.
     */
    public function show(Personal $personal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personal $personal)
    {
        return view('personal.edit', ['personal' => $personal]);
    }
    


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personal $personal)
{
    $data = $request->validate([
        'nombre' => 'required',
        'apellido1'=> 'required',
        'apellido2'=>'',
        'sexo'=> 'required',
        'regimen'=> 'required',
        'area'=> 'required',
        'departamento'=> 'required',
        'fecha_incorporacion'=> 'required',
        'nif'=> 'required',
        'correo'=> 'required',
    ]);

    
    
    $personal->update($data);

    return redirect(route('personal.index'))->with('success', 'Los datos se han actualizado correctamente.');
}

    

   
    public function delete(Personal $personal)
    {
        
    }
}
