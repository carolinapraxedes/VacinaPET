<?php

namespace App\Http\Controllers;

use App\Models\Breed;
use Illuminate\Http\Request;
use App\Models\Tutor;
use App\Models\Pet;
use App\Models\Specie;
use App\Http\Requests\RegisterPetRequest;
use App\Models\ColorPet;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pets = Pet::all();
        return view('pages.pet.index',compact('pets'));
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
        return view('pages.pet.create',compact('breeds','species','colors'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterPetRequest $request)
    {
      
        //Idade do pet em meses
        $dateOfBirth = Carbon::parse($request->input('dateBirthPet'));

        $age = $dateOfBirth->diffInMonths(Carbon::now());
        
        
        $petData = [
            'name' => $request->input('namePet'),
            'specie_id' => $request->input('speciePet'),
            'breed_id' => $request->input('breedPet'),
            'gender' => $request->input('genderPet'),
            'RGA' => $request->input('rgaPet'),
            'color' => $request->input('colorPet'),
            'age' => $age,
            'dateBirth' => $request->input('dateBirthPet'),
            
        ];
              


        $pet = Pet::create($petData);

        // Cria o tutor
        $tutor = Auth::user()->id;

        // Associe o pet ao tutor
        $pet->tutor()->associate($tutor);
        $pet->save();


        return redirect()->route('pets.index');
           

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

    public function getSpecie(){
        
        $species= Specie::all();

        return response()->json($species);
    }
    public function getBreed(Request $request){
        
        $breeds= Breed::where('specie_id', $request->specie_id)->pluck('breed');

        if(!empty($breeds)){
            return response()->json($breeds);
        }
    }
}
