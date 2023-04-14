<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('stagiaire.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('stagiaire.create');
    }

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
     * @param  \App\Models\Stagiaire  $stagiaire
     * @return \Illuminate\Http\Response
     */
    public function show(Stagiaire $stagiaire)
    {
        return view('stagiaire.show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stagiaire  $stagiaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Stagiaire $stagiaire)
    {
        return view('stagiaire.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stagiaire  $stagiaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stagiaire $stagiaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stagiaire  $stagiaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stagiaire $stagiaire)
    {
        //
    }
}
