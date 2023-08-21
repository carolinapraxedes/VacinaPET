<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterVaccination;
use App\Models\Manufacturer;
use App\Models\Pet;
use App\Models\Specie;
use App\Models\Vaccination;
use App\Models\VaccinationLocation;
use App\Models\Vaccine;
use App\Models\Veterinarian;
use Carbon\Carbon;
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

    public function searchRGA(){
        
    }

    public function getCRMV($id){
        $veterinarian = Veterinarian::find($id);
        if ($veterinarian) {
            return response()->json(['CRMV_RN' => $veterinarian->CRMV_RN]);
        }
        return response()->json(['error' => 'Veterinarian not found'], 404);
    }

    
    public function create()
    {
        $species=Specie::all();
        $vaccines = Vaccine::all();

        $manufacturers = Manufacturer::all();
        $veterinarians = Veterinarian::all();
        $locals = VaccinationLocation::all();
        

        
        $rga = 66666666;
        $pet = Pet::where('RGA',$rga)->first();
        
        

        return view('pages.vaccination.create',compact('species','pet','vaccines', 'manufacturers', 'veterinarians','locals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterVaccination $request)
    {
       
        $pet = Pet::where('RGA', $request->input('rgaPet'))->first();
        
        $vaccinationData =[
            'pet_id'=> $pet->id,
            'administrationDate' => $request->input('dateVaccination'),
            'lote' => $request->input('lote'),
            'dose'=> $request->input('dose'),

            'rga' =>  $request->input('rgaPet'),
            'vaccine_id' => $request->input('vaccine_id'),
            'manufacturer_id' => $request->input('manufacturer_id'),
            'vaccination_location_id'=> $request->input('localVaccination'),
            'veterinarian_id' => $request->input('veterinarian_id')

        ];
        
        Vaccination::create($vaccinationData);

        return redirect()->route('vaccination.index');
        


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
