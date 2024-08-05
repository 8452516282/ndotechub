<?php

namespace App\Http\Controllers;

use App\Models\Papaton;
use App\Http\Requests\StorePapatonRequest;
use App\Http\Requests\UpdatePapatonRequest;

class PapatonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('./papaton.index');
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
    public function store(StorePapatonRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Papaton $papaton)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Papaton $papaton)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePapatonRequest $request, Papaton $papaton)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Papaton $papaton)
    {
        //
    }
}
