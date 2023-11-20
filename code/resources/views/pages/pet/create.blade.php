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
                                <p class="mb-0">Cadastrar um novo PET</p>
                                
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <form role="form" method="POST" action={{ route('pets.store') }} enctype="multipart/form-data">
                                @csrf
                                
                                <div class="card-body">
                                    <p class="text-uppercase text-sm">Informações Gerais do PET</p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nome</label>
                                                <input class="form-control" type="text" name="namePet" placeholder="Digite o nome aqui.." value="{{ old('namePet') }}" >
                                                @error('namePet') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror                                                
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Espécie</label>
                                                <select class="form-control" name="speciePet" id="speciePet" >
                                                    <option selected disabled>Selecione uma espécie</option>
                                                    @foreach ($species as $specie)
                                                        <option value="{{ $specie->id }}">{{ $specie->specie === 'Canino' ? 'Canino' : 'Felino'}}</option>
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
                                        <div class="col-md-2">
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
                                                <label for="example-text-input" class="form-control-label">Registro Geral Animal (RGA)</label>
                                                <input class="form-control" type="text" placeholder="Digite o RGA aqui.." name="rgaPet" value="{{ old('rgaPet') }}">  
                                                @error('rgaPet') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror                                            
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Data de Nascimento</label>
                                                <input class="form-control" type="date" name="dateBirthPet" id="dateBirthPet" value="{{ old('dateBirthPet') }}">
                                                @error('dateBirthPet') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror 
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Cor</label>
                                                <select class="form-select form-control" id="single-select-field" name="colorPet" id="colorPet" >
                                                    <option selected disabled>Selecione a cor do animal</option>
                                                    @foreach ($colors as $color)
                                                        <option value="{{ $color->id }}" {{ old('colorPet') == $color->id ? 'selected' :  '' }}>{{ $color->Color }}</option>
                                                    @endforeach
                                                </select>
                                                @error('colorPet') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                            </div>
                                        </div>
                                    </div>

                                    
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
