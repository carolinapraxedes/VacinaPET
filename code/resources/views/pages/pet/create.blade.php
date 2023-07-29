@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'PETS'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-lg mx-4 ">
                    <div>
                        <div class="card-body p-3">
                            <form role="form" method="POST" action={{ route('pets.store') }} enctype="multipart/form-data">
                                @csrf
                                <div class="card-header pb-0">
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0">Cadastrar um novo PET</p>
                                        
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="text-uppercase text-sm">Informações Gerais do PET</p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nome</label>
                                                <input class="form-control" type="text" name="namePet" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Espécie</label>
                                                <select class="form-control" name="speciePet">
                                                    @foreach ($species as $specie)
                                                        <option value="{{ $specie->id }}">{{ $specie->specie === 'dog' ? 'Cachorro' : 'Gato'}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Raça</label>
                                                <select class="form-control" name="breedPet">
                                                    @foreach ($breeds as $breed)
                                                        <option value="{{ $breed->id }}">{{ $breed->breed }}</option>
                                                    @endforeach
                                                </select>                                        
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Sexo</label>
                                                <input class="form-control" type="text" name="genderPet" value="">                                            
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Registro Geral Animal</label>
                                                <input class="form-control" type="text" name="rgaPet" value="">                                            
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="horizontal dark">
                                    <p class="text-uppercase text-sm">Informações adicionais do PET</p>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Cor</label>
                                                <input class="form-control" type="text" name="colorPet"
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Idade</label>
                                                <input class="form-control" type="text" name="agePet" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Data de Nascimento</label>
                                                <input class="form-control" type="text" name="dateBirthPet" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Descrição</label>
                                                <input class="form-control" type="text" name="descriptionPet" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="horizontal dark">
                                    <p class="text-uppercase text-sm">Tutor</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nome</label>
                                                <input class="form-control" type="text" name="nameTutor" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">CPF</label>
                                                <input class="form-control" type="text" name="cpfTutor" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Email</label>
                                                <input class="form-control" type="text" name="emailTutor" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Telefone</label>
                                                <input class="form-control" type="text" name="numberPhoneTutor" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="horizontal dark">
                                    <div class="row">
                                        <div class="d-flex align-items-center">
                                                                           
                                            <button type="submit" class="btn btn-primary btn-sm ms-auto">Save</button>
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
@endsection