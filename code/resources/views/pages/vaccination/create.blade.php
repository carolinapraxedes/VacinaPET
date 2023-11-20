@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'REGISTRAR VACINAÇÃO'])
    <div class="row mt-4 mx-4">
        <div class="col-12">

            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Cadastramento de Vacinação</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" method="POST" action={{ route('vaccination.store') }}
                                enctype="multipart/form-data">
                                @csrf
                                <p class="text-uppercase text-sm">Informações sobre PET</p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Registro Geral Animal
                                                (RGA)</label>
                                            <input class="form-control" type="text" id="rgaPet" name="rgaPet"
                                                value="{{ old('rgaPet') }}" placeholder="Digite o RGA do animal">
                                            @error('rgaPet')
                                                <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Nome</label>
                                            <input class="form-control" type="text" id="namePet" name="namePet"
                                                value="{{ old('namePet') }}">

                                            @error('namePet')
                                                <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Espécie</label>
                                            <input class="form-control" type="text" id="speciePet" name="speciePet"
                                                value="{{ old('speciePet') }}">

                                            @error('speciePet')
                                                <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Sexo</label>
                                            <input class="form-control" type="text" id="genderPet" name="genderPet"
                                                value="{{ old('namePet') }}">
                                            @error('genderPet')
                                                <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                            @enderror

                                        </div>
                                    </div>


                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Data de
                                                Nascimento</label>
                                            <input class="form-control" type="text" name="dateBirthPet" id="dateBirthPet"
                                                value="{{ old('dateBirthPet') }}">
                                            {{-- {{ $pet->dateBirth->format('d/m/Y') }} --}}
                                            @error('dateBirthPet')
                                                <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Nome do Tutor</label>
                                            <input class="form-control" type="text" id="nameTutor" name="nameTutor"
                                                value="{{ old('nameTutor') }}">
                                            {{-- {{ $pet->tutor->name }} --}}
                                            @error('nameTutor')
                                                <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">CPF do Tutor</label>
                                            <input class="form-control" type="text" id="cpfTutor" name="cpfTutor"
                                                value="{{ old('cpfTutor') }}">
                                            @error('cpfTutor')
                                                <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                <hr class="horizontal dark">
                                <p class="text-uppercase text-sm">Informações sobre a vacinação</p>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="example-select" class="form-control-label">Nome da vacina</label>
                                            <select class="form-control" name="vaccine_id">
                                                <option selected disabled>Selecione a vacina</option>
                                                @foreach ($vaccines as $vaccine)
                                                    <option value="{{ $vaccine->id }}">{{ $vaccine->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('vaccine_id')
                                                <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Data da
                                                vacinaçao</label>
                                            <input class="form-control datepicker" type="date" datetime="DD-MM-YYYY"
                                                name="dateVaccination" id="dateVaccination">
                                            @error('dateVaccination')
                                                <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Dosagem</label>
                                            <select class="form-control" name="dose" id="dose">
                                                <option selected disabled>Selecione a dosagem</option>
                                                <option value="0" {{ old('dose') == '0' ? 'selected' : '' }}>Única
                                                </option>
                                                <option value="1" {{ old('dose') == '1' ? 'selected' : '' }}>Primeira
                                                    dose</option>
                                                <option value="2" {{ old('dose') == '2' ? 'selected' : '' }}>Segunda
                                                    dose</option>
                                                <option value="3" {{ old('dose') == '3' ? 'selected' : '' }}>Reforço
                                                </option>
                                            </select>

                                            @error('dose')
                                                <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Lote</label>
                                            <input class="form-control" type="text" name="lote"
                                                placeholder="Digite o lote aqui.." id="batchNumber">
                                            @error('lote')
                                                <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Fabricante</label>
                                            <select class="form-control" name="manufacturer_id">
                                                <option selected disabled>Selecione a fabricante</option>
                                                @foreach ($manufacturers as $manufacturer)
                                                    <option value="{{ $manufacturer->id }}">{{ $manufacturer->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('manufacturer_id')
                                                <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Estabelecimento de
                                                saúde</label>
                                            <select class="form-control" name="localVaccination" id="localVaccination">

                                                <option selected disabled>Selecione o local</option>
                                                @foreach ($locals as $local)
                                                    <option value="{{ $local->id }}">{{ $local->name }}</option>
                                                @endforeach
                                            </select>

                                            @error('localVaccination')
                                                <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                            @enderror
                                        </div>
                                    </div>


                                </div>
                                <hr class="horizontal dark">
                                <p class="text-uppercase text-sm">Informações sobre o aplicador</p>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Profissional
                                                Aplicador</label>
                                            <select class="form-control" name="veterinarian_id" id="veterinarian_id">

                                                <option selected disabled>Selecione o Veterinário</option>
                                                @foreach ($veterinarians as $veterinarian)
                                                    <option value="{{ $veterinarian->id }}">{{ $veterinarian->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('veterinarian_id')
                                                <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">CRMV</label>
                                            <input class="form-control" type="text" id="vaccinatorCRMV"
                                                name="vaccinatorCRMV" placeholder="Digite o CRMV do profisional aqui..."
                                                value="{{ old('vaccinatorCRMV') }}">
                                            @error('vaccinatorCRMV')
                                                <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                            @enderror

                                        </div>
                                    </div>
                                </div>

                                <br>
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

    <script type="text/javascript">
        $(document).ready(function() {
            $('#cpfTutor').mask('000.000.000-00', {
                reverse: true
            });

        });


        $(document).ready(function() {
            $('#rgaPet').change(function() {
                var rga = $(this).val();

                // Fazer a chamada AJAX para obter o CRMV
                $.ajax({
                    url: '/get-rga/' + rga, // Substitua pela rota correta
                    type: 'GET',
                    success: function(response) {
                        var date = new Date();

                        // Formata a data no formato dd/mm/yyyy
                        
                        console.log(response)
                        //console.log(response.rga)  
                        $('#namePet').val(response.rga.namePet);
                        $('#speciePet').val(response.rga.speciePet_id === 1 ? 'Canino' :
                            'Felino');
                        $('#genderPet').val(response.rga.genderPet === 'M' ? 'Macho' : 'Fêmea');
                        $('#dateBirthPet').datepicker('setDate', new Date(response.rga
                            .dateBirthPet));
                        $('#nameTutor').val(response.rga.nameTutor);
                        $('#cpfTutor').val(response.rga.cpfTutor);

                        // $('#vaccinatorCRMV').val(response.CRMV_RN).prop('disabled', true);
                    },
                    error: function(response) {
                        // console.log(response.responseJSON);
                    }
                });
            });
        });

        $('#dateBirthPet').datepicker({
            dateFormat: 'dd/mm/yy',
            changeMonth: true,
            changeYear: true,
            yearRange: '-100:+0'
           
        });

        $(document).ready(function() {
            $('#veterinarian_id').change(function() {
                var veterinarian_id = $("option:selected", this).val();

                // Fazer a chamada AJAX para obter o CRMV
                $.ajax({
                    url: '/get-veterinarian-crmv/' + veterinarian_id, // Substitua pela rota correta
                    type: 'GET',
                    success: function(response) {
                        $('#vaccinatorCRMV').val(response.CRMV_RN);
                    },
                    error: function(response) {
                        console.log(response.responseJSON);
                    }
                });
            });
        });
    </script>
@endsection
