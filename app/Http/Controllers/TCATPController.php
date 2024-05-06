<?php

namespace App\Http\Controllers;

use App\Models\TCATP;
use Illuminate\Http\Request;

class TCATPController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tcatp = TCATP::all();
        return view('tcatp.indexTCATP', ['tcatp'=>$tcatp]);   
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
    public function show(TCATP $tCATP)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TCATP $tCATP)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TCATP $tCATP)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TCATP $tCATP)
    {
        //
    }
}
