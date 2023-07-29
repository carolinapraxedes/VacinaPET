<?php

namespace App\Http\Controllers;

use App\Models\Breed;
use Illuminate\Http\Request;
use App\Models\Tutor;
use App\Models\Pet;
use App\Models\Specie;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.pet.index');
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
        return view('pages.pet.create',compact('breeds','species'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $petData = [
            'name' => $request->input('namePet'),
            'specie_id' => $request->input('speciePet'),
            'breed_id' => $request->input('breedPet'),
            'gender' => $request->input('genderPet'),
            'RGA' => $request->input('rgaPet'),
            'color' => $request->input('colorPet'),
            'age' => $request->input('agePet'),
            'dateBirth' => $request->input('dateBirthPet'),
            'description' => $request->input('descriptionPet'),
        ];

        
        $pet = Pet::create($petData);

        $tutorData = [
            'name' => $request->input('nameTutor'),
            'CPF' => $request->input('cpfTutor'),
            'email' => $request->input('emailTutor'),
            'numberPhone' => $request->input('numberPhoneTutor'),
        ];

         // Crie o tutor
            $tutor = Tutor::create($tutorData);

            // Associe o pet ao tutor
            $pet->tutor()->associate($tutor);
            $pet->save();

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
