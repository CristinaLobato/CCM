<?php

namespace App\Http\Controllers;

use App\Models\TCAT;
use Illuminate\Http\Request;

class TCATController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tcat = TCAT::all();
        return view('tcat.indexTCAT', ['tcat'=>$tcat]);   
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TCAT $tCAT)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TCAT $tCAT)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TCAT $tCAT)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TCAT $tCAT)
    {
        //
    }
}
