<?php

namespace App\Http\Controllers;

use App\Models\Vaccination;
use Illuminate\Http\Request;

class VaccinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.vaccination.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.vaccination.create');
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
     * @param  \App\Models\Vacinacao  $vacinacao
     * @return \Illuminate\Http\Response
     */
    public function show(Vaccination $vacinacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vacinacao  $vacinacao
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaccination $vacinacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vacinacao  $vacinacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vaccination $vacinacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vacinacao  $vacinacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vaccination $vacinacao)
    {
        //
    }
}
