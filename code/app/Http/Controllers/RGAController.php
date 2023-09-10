<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRGArequest;
use App\Models\Breed;
use App\Models\CoatPet;
use App\Models\ColorPet;
use App\Models\ProfilePet;
use App\Models\ProvenancePet;
use App\Models\RGA;
use App\Models\SizePet;
use App\Models\Specie;
use Carbon\Carbon;
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
        return view('pages.rga.index');
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
    public function store(RegisterRGArequest $request)
    {
        //dd($request->all());
        // Obtenha a data de nascimento do tutor e do pet do request
        $dateBirthTutor = Carbon::parse($request->input('dateBirthTutor'));
        $dateBirthPet = Carbon::parse($request->input('dateBirthPet'));

        // Calcule a idade do tutor em anos
        $ageTutor = $dateBirthTutor->diffInYears(Carbon::now());

        // Calcule a idade do pet em meses
        $agePet = $dateBirthPet->diffInMonths(Carbon::now());
        //dd($agePet);

        $data = [
            
            'nameTutor' => $request->input('nameTutor'),
            'emailTutor' => $request->input('emailTutor'),
            'cpfTutor' => $request->input('cpfTutor'),
            'dateBirthTutor' => $request->input('dateBirthTutor'),
            'ageTutor' => $ageTutor,
            'numberPhoneTutor' => $request->input('numberPhoneTutor'),


            'namePet' => $request->input('namePet'),
            'speciePet_id' => $request->input('speciePet'),
            'breedPet_id' => $request->input('breedPet'),
            'genderPet' => $request->input('genderPet'),
            'dateBirthPet' => $request->input('dateBirthPet'),
            'agePet' => $agePet,

            'colorPet_id' => $request->input('colorPet'),
            'sizePet_id' => $request->input('sizePet'),
            'coatPet_id' => $request->input('coatPet'),
            'profilePet_id' => $request->input('profilePet'),
            'provenancePet_id' => $request->input('provenancePet'),
            
        ];
        //dd($data);

        RGA::create($data);

        return redirect()->route('home');



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
