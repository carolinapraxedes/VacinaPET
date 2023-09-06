@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'PETS'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-lg mx-4 ">
                    <div>
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Solicitação do Registro Geral do Animal (RGA)</p>
                                
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <form role="form" method="POST" action={{ route('pets.store') }} enctype="multipart/form-data">
                                @csrf
                                
                                <div class="card-body">
                                    <p class="text-uppercase text-sm">Informações do tutor</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nome Completo</label>
                                                <input class="form-control" type="text" name="nameTutor" placeholder="Digite o nome aqui.." value="{{ old('nameTutor') }}" >
                                                @error('nameTutor') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">E-mail</label>
                                                <input class="form-control" type="email" name="emailTutor" placeholder="teste@email.com" value="{{ old('emailTutor') }}" >
                                                @error('emailTutor') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror 
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">CPF</label>
                                                <input class="form-control" type="text" name="cpfTutor" placeholder="000.000.000-00" id="cpfTutor" value="{{ old('cpfTutor') }}" >
                                                @error('cpfTutor') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror 
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Data de Nascimento</label>
                                                <input class="form-control" type="date" name="dateBirthPet" id="dateBirthPet" value="{{ old('dateBirthPet') }}">
                                                @error('dateBirthPet') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror 
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Contado do celular</label>
                                                <input class="form-control" type="text" name="numberPhoneTutor" placeholder="(00) 00000-000" id="numberPhoneTutor" value="{{ old('numberPhoneTutor') }}" >
                                                @error('numberPhoneTutor') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror 
                                            </div>
                                        </div>

                                    </div>
                                    <hr class="horizontal dark">
                                    <p class="text-uppercase text-sm">Informações do animal</p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nome do animal</label>
                                                <input class="form-control" type="text" placeholder="Digite o nome aqui.." name="colorPet"
                                                value="{{ old('colorPet') }}">
                                                    @error('colorPet') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror 
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Espécie</label>
                                                <select class="form-control" name="speciePet" id="speciePet" >
                                                    <option selected disabled>Selecione uma espécie</option>
                                                    @foreach ($species as $specie)
                                                        <option value="{{ $specie->id }}">{{ $specie->specie === 'dog' ? 'Canino' : 'Felino'}}</option>
                                                    @endforeach
                                                </select>
                                                @error('speciePet') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Raça</label>
                                                <select class="form-control" name="breedPet" id="breedPet">
                                                    <option selected disabled>Selecione uma raça</option>
                                                </select>
                                                @error('breedPet') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror                                        
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Sexo</label>
                                                <select class="form-control" name="genderPet" id="genderPet" >
                                                    <option value="M"  {{ old('genderPet') == 'M' ? 'selected' : '' }}>Macho</option>
                                                    <option value="F"  {{ old('genderPet') == 'F' ? 'selected' : '' }}>Fêmea</option>
                                                </select>
                                                @error('genderPet') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror                                         
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Data de Nascimento</label>
                                                <input class="form-control" type="date" name="dateBirthPet" id="dateBirthPet" value="{{ old('dateBirthPet') }}">
                                                @error('dateBirthPet') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror 
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Cor</label>
                                                <select class="form-control" name="speciePet" id="speciePet" >
                                                    <option selected disabled>Selecione a cor do animal</option>
                                                    @foreach ($colors as $color)
                                                        <option value="{{ $color->id }}">{{ $color->Color }}</option>
                                                    @endforeach
                                                </select>
                                                @error('speciePet') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Porte do animal</label>
                                                <select class="form-control" name="speciePet" id="speciePet" >
                                                    <option selected disabled>Selecione o porte</option>
                                                    @foreach ($sizes as $size)
                                                        <option value="{{ $size->id }}">{{ $size->Size }}</option>
                                                    @endforeach
                                                </select>
                                                @error('speciePet') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Pelagem do animal</label>
                                                <select class="form-control" name="speciePet" id="speciePet" >
                                                    <option selected disabled>Selecione a pelagem</option>
                                                    @foreach ($coats as $coat)
                                                        <option value="{{ $coat->id }}">{{ $coat->Coat }}</option>
                                                    @endforeach
                                                </select>
                                                @error('speciePet') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                            </div>
                                        </div>                                     
                                    </div>
                                    <hr class="horizontal dark">
                                    <p class="text-uppercase text-sm">Histórico do animal</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Perfil  do animal</label>
                                                <select class="form-control" name="speciePet" id="speciePet" >
                                                    <option selected disabled>Selecione o  perfil</option>
                                                    @foreach ($profiles as $profile)
                                                        <option value="{{ $profile->id }}">{{ $profile->Profile }}</option>
                                                    @endforeach
                                                </select>
                                                @error('speciePet') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                            </div>
                                        </div>          

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Procedência do animal</label>
                                                <select class="form-control" name="speciePet" id="speciePet" >
                                                    <option selected disabled>Selecione a procedência</option>
                                                    @foreach ($provenances as $provenance)
                                                        <option value="{{ $provenance->id }}">{{ $provenance->Provenance }}</option>
                                                    @endforeach
                                                </select>
                                                @error('speciePet') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                            </div>
                                        </div>          

                                    </div>
                                    <hr class="horizontal dark">
                                    <div class="row">
                                        <div class="d-flex align-items-center">
                                                                           
                                            <button type="submit" class="btn btn-primary btn-sm ms-auto">Registrar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @include('layouts.footers.auth.footer')
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#numberPhoneTutor').mask('(00) 00000-0000');
            $('#cpfTutor').mask('000.000.000-00', {reverse: true});
            

        });
    
        $(document).ready(function () {
            $('#speciePet').on('change', function () {
                var specie_id = this.value;
                $('#breedPet').html('');
                $.ajax({
                    url: '{{ route('getBreed') }}?specie_id='+specie_id,
                    type: 'get',
                    success: function (res) {                        
                         $('#breedPet').html('<option selected disabled>Selecione uma raça</option>');
                        $.each(res, function (key, value) {                           
                            $('#breedPet').append('<option value="' + key + '">' + value + '</option>');
                        });
    
                    }
                });
            });
        });

    
    </script>
    
@endsection
