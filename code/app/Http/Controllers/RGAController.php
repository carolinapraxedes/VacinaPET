<?php

namespace App\Http\Controllers;

use App\Models\Breed;
use App\Models\CoatPet;
use App\Models\ColorPet;
use App\Models\ProfilePet;
use App\Models\ProvenancePet;
use App\Models\SizePet;
use App\Models\Specie;
use Illuminate\Http\Request;

class RGAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    
    {
        $breeds= Breed::all();
        $species= Specie::all();
        $colors = ColorPet::all();
        $sizes = SizePet::all();
        $coats = CoatPet::all();
        $profiles =  ProfilePet::all();
        $provenances= ProvenancePet::all();
        return view('pages.rga.create', compact(
            'breeds','species','colors','sizes','coats','profiles','provenances'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
