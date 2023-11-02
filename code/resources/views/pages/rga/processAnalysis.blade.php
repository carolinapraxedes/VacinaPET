@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'PETS'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-lg mx-4 ">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">#{{ $rga->id }} - Solicitação de {{ $rga->nameTutor }}</p>
                        </div>
                    </div>
                    <div class="card-body p-3">



                        <div class="card-body">
                            <p class="text-uppercase text-sm">Informações do tutor</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Nome Completo</label>
                                        <p>{{ $rga->nameTutor }}</p>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">E-mail</label>
                                        <p>{{ $rga->emailTutor }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">CPF</label>
                                        <p>{{ $rga->cpfTutor }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Data de Nascimento do
                                            tutor</label>
                                        <p>{{ $rga->dateBirthTutor }}</p>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Contado do
                                            celular</label>
                                        <p>{{ $rga->numberPhoneTutor }}</p>
                                    </div>
                                </div>

                            </div>
                            <hr class="horizontal dark">
                            <p class="text-uppercase text-sm">Informações do animal</p>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Nome do
                                            animal</label>
                                        <p>{{ $rga->namePet }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Espécie</label>
                                        <p>{{ $rga->specie->specie }}</p>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Raça</label>
                                        {{-- <p>{{ $rga->breed->breed  }}</p> --}}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Sexo</label>
                                        <p>{{ $rga->genderPet }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Data de Nascimento do
                                            animal</label>
                                        <p>{{ $rga->dateBirthPet }}</p>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Cor</label>
                                        <p>{{ $rga->color->Color }}</p>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Porte do
                                            animal</label>
                                        <p>{{ $rga->sizePet->Size }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Pelagem do
                                            animal</label>
                                        <p>{{ $rga->coat->Coat }}</p>
                                    </div>
                                </div>
                            </div>
                            <hr class="horizontal dark">
                            <p class="text-uppercase text-sm">Histórico do animal</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Perfil do
                                            animal</label>
                                        <p>{{ $rga->profilePet->Profile }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Procedência do
                                            animal</label>
                                        <p>{{ $rga->ProvenancePet->Provenance }}</p>
                                    </div>
                                </div>

                            </div>

                            <div class="row mt-2">
                                <div class="d-flex  justify-content-end">
                                    <form role="form" id="acceptedProcess" method="POST"
                                        action={{ route('rga.accepted', ['processRGA' => $rga->id]) }}>
                                        @csrf
                                        <button type="submit" class="btn btn-success btn-sm mx-1"
                                            href="">Aceitar</button>

                                    </form>
                                    <form role="form" id="rejectedProcess" method="POST"
                                        action={{ route('rga.rejected', ['processRGA' => $rga->id]) }}>
                                        @csrf
                                        <div id="motivoReprovacao" style="display: none;">
                                            <textarea name="reasonReject" id="reasonReject" maxlength="255"></textarea>
                                            <div id="caracteresRestantes">255 caracteres restantes</div>
                                        </div>
                                        <button type="submit" class="btn btn-danger btn-sm mx-1"
                                            href="">Rejeitar</button>

                                    </form>

                                    <a class="btn btn-info btn-sm mx-1" href="{{ route('rga.index') }}">Cancelar</a>

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
@endsection
@section('scripts')
    <script>
        $('#acceptedProcess').on('submit', function(e) {
            
            e.preventDefault();
            Swal.fire({
                title: 'Tem certeza que deseja aceitar?',
                showDenyButton: false,
                showCancelButton: true,
                confirmButtonText: 'Registrar',
                cancelButtonText: `Cancelar`,
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit(); // Submeter o formulário se "Registrar" for clicado
                }
            })
        })
        $('#rejectedProcess').on('submit', function(e) {

            
            e.preventDefault();
            Swal.fire({
                input: 'textarea',
                inputLabel: 'Digite o  motivo da reprovação',
                inputPlaceholder: 'Digite aqui o motivo...',
                inputAttributes: {
                    'aria-label': 'Digite aqui o motivo...',
                    'maxlength': 255,
                    
                },
                showCancelButton: true,
                cancelButtonText: `Cancelar`,
                confirmButtonText: 'Salvar',
                preConfirm: (text) => {
                    if (!text) {
                        Swal.showValidationMessage('Por favor, insira o motivo da reprovação.');
                    } else if (text.length > 255) {
                        Swal.showValidationMessage('O motivo da reprovação não pode ter mais de 255 caracteres.');
                    }else {
                        $('#reasonReject').val(text);
                        // Envie o formulário manualmente
                        this.submit();
                    }
                }
            })            
        })
    </script>
@endsection
