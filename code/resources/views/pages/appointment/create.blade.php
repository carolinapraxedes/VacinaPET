@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'PETS'])
    <div class="row mt-4 mx-4">
        <div class="col-12">
            
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Cadastramento de Vacinação</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" method="POST" action={{ route('vaccination.store') }} enctype="multipart/form-data">
                                @csrf
                                <p class="text-uppercase text-sm">Informações sobre PET</p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Nome</label>
                                            <input class="form-control" type="text" name="namePet"  value="" readonly>
                                            
                                            @error('namePet') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Espécie</label>
                                            <input class="form-control" type="text" name="speciePet" value="" readonly>

                                            @error('speciePet') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                        </div>
                                    </div>
                      

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Sexo</label>
                                            <input class="form-control" type="text" name="genderPet" value="" readonly>
                                            @error('genderPet') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror                                         
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Registro Geral Animal (RGA)</label>
                                            <input class="form-control" type="text" name="rgaPet" value="" readonly>  
                                            @error('rgaPet') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror                                            
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Data de Nascimento</label>
                                            <input class="form-control" type="text" name="dateBirthPet" id="dateBirthPet" value="" readonly>
                                            @error('dateBirthPet') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror 
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Nome do Tutor</label>
                                            <input class="form-control" type="text" name="nameTutor"  value="" readonly>
                                            @error('nameTutor') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">CPF do Tutor</label>
                                            <input class="form-control" type="text" name="cpfTutor"  value="" readonly>
                                            @error('cpfTutor') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                            
                                        </div>
                                    </div>
                                </div>                               
                                <hr class="horizontal dark">

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Profissional Aplicador</label>
                                            <select class="form-control" name="veterinarian_id" id="veterinarian_id">
                                                
                                                <option selected disabled>Selecione o Veterinário</option>
                                                @foreach($locals as $local)
                                                    <option value="{{ $local->id }}">{{ $local->name }}</option>
                                                @endforeach
                                            </select>                                             
                                            @error('veterinarian_id') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror 
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">CRMV</label>
                                            <input class="form-control" type="text" name="vaccinatorCRMV" placeholder="Digite o CRMV do profisional aqui..."  value="{{ old('vaccinatorCRMV') }}" >
                                            @error('vaccinatorCRMV') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                            
                                        </div>
                                    </div>
                                
                                <div class="row">
                                    <div class="d-flex align-items-center">                                                                      
                                        <button type="submit" class="btn btn-primary btn-sm ms-auto">Registrar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

@endsection
