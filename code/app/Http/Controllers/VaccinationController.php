<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterVaccination;
use App\Models\Manufacturer;
use App\Models\Pet;
use App\Models\RGA;
use App\Models\Specie;
use App\Models\Vaccination;
use App\Models\VaccinationLocation;
use App\Models\Vaccine;
use App\Models\Veterinarian;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

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

    public function searchRGA()
    {
    }


    public function getRGA($rga)
    {
        $rgaPet = RGA::where('rga', $rga)->first();
        if ($rgaPet) {
            return response()->json(['rga' => $rgaPet]);
        }
        return response()->json(['error' => 'rga not found with rga number' . $rga], 404);
    }

    public function getCRMV($id)
    {
        $veterinarian = Veterinarian::find($id);
        if ($veterinarian) {
            return response()->json(['CRMV_RN' => $veterinarian->CRMV_RN]);
        }
        return response()->json(['error' => 'Veterinarian not found'], 404);
    }

    public function create()
    {
        try {
            $species = Specie::all();
            $vaccines = Vaccine::all();
            $manufacturers = Manufacturer::all();
            $veterinarians = Veterinarian::all();
            $locals = VaccinationLocation::all();

            return view('pages.vaccination.create', compact('species', 'vaccines', 'manufacturers', 'veterinarians', 'locals'));
        } catch (\Exception $e) {
            return redirect()->route('vaccination.index')->with('error', $e->getMessage());
        }
    }


    public function store(RegisterVaccination $request)
    {
        $pet = Pet::where('RGA', $request->input('rgaPet'))->first();
        //dd($request->input('rgaPet'));
        try {
            if (empty($pet)) {
                return redirect()->route('vaccination.index')->with('error', 'Nenhum animal de estimação foi encontrado com esse RGA!');
            } else {

                $vaccinationData = [
                    'pet_id' => $pet->id,
                    'administrationDate' => $request->input('dateVaccination'),
                    'lote' => $request->input('lote'),
                    'dose' => $request->input('dose'),

                    'rga' =>  $request->input('rgaPet'),
                    'vaccine_id' => $request->input('vaccine_id'),
                    'manufacturer_id' => $request->input('manufacturer_id'),
                    'vaccination_location_id' => $request->input('localVaccination'),
                    'veterinarian_id' => $request->input('veterinarian_id')
                ];
                Vaccination::create($vaccinationData);
                return redirect()->route('vaccination.index')->with('sucess', "Vacinação registrada!");
            }
        } catch (\Exception $e) {
            return redirect()->route('vaccination.index')->with('error', $e->getMessage());
        }
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
