<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRGArequest;
use App\Models\Breed;
use App\Models\CoatPet;
use App\Models\ColorPet;
use App\Models\ProcessRGA;
use App\Models\ProfilePet;
use App\Models\ProvenancePet;
use App\Models\RGA;
use App\Models\SizePet;
use App\Models\Specie;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


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
        
        // Obtenha a data de nascimento do tutor e do pet do request
        $dateBirthTutor = Carbon::parse($request->input('dateBirthTutor'));
        $dateBirthPet = Carbon::parse($request->input('dateBirthPet'));

        // Calcule a idade do tutor em anos
        $ageTutor = $dateBirthTutor->diffInYears(Carbon::now());

        // Calcule a idade do pet em meses
        $agePet = $dateBirthPet->diffInMonths(Carbon::now());
        //dd($agePet);

        try { 
            $dataRGA = [
            
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
            
            $rgaRequest = RGA::create($dataRGA);
    
            $dataProcess = [
                'rga_id'=> $rgaRequest->id,
                'requestDate' => Carbon::now(),
                'status'=> 0,
                'analysisDate'=> null,
                'reasonReject'=> null,
            ];
            
            $process =  ProcessRGA::create($dataProcess);
    
            $rgaRequest->update(['process_id' => $process->id]);           
            $rgaRequest->save();

            
            return redirect()->route('rga.index')->with('success',"Solicitação de RGA cadastrada com sucesso!");
            
        } catch (\Exception $e) {
            return redirect()->route('rga.index')->with('error', $e->getMessage());
            
        }


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

    public function listOpen(){
        $rgas = RGA::all();
        $process = ProcessRGA::where('status',0)->get();
        //dd($process);
        return view('pages.rga.request.open.index',compact('rgas','process'));
    }

    public function processRGA($id)
    {
        $rga = RGA::find($id);
        //sdd($rga->breed->breed);
        return view('pages.rga.processAnalysis',compact('rga'));
    }

    public function listClose(){
        
        $rgas = RGA::all();
        $process = ProcessRGA::where('status',1)->get();
        return view('pages.rga.request.close.index',compact('rgas','process'));
    }

    public function acceptedRGA($id)
    {       
        $randomNumber = random_int(10000000, 99999999);
        
        $rga = RGA::where('id',$id)->first();
        $process = processRGA::where('rga_id',$id)->first();             
        try { 
            if(empty($rga->rga)){           
                $rga->update(['rga' => $randomNumber]);
                $rga->save();

                $process->update(['status' => 1,'analysisDate' => Carbon::now()]);

           
                return redirect()->route('rga.index')->with('success','RGA cadastrado com sucesso!');
            }else{
                
                return redirect()->route('rga.index')->with('warning',"O RGA já existe");
            }  
        } catch (\Exception $e) {
            return redirect()->route('rga.index')->with('error', $e->getMessage());
            
        }

    }

    public function rejectedRGA(Request $request, $id)
    {       
        $process = processRGA::where('rga_id',$id)->first(); 
        $motive =  $request->reasonReject;         
        try { 
                 
            $process->update(['status' => 1,'analysisDate' => Carbon::now(),'reasonReject'=>$motive]);
       
            return redirect()->route('rga.index')->with('warning','Processo de RGA rejeitado com sucesso!');    
   
        } catch (\Exception $e) {
            return redirect()->route('rga.index')->with('error', $e->getMessage());
            
        }

    }

    public function search(){
        return view('pages.rga.search');
    }

    public function searching(Request $request){
       dd($request->all());
    }
    
}
