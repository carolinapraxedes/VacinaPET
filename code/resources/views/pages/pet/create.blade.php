@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'PETS'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-lg mx-4 ">
                    <div>
                        <div class="card-body p-3">
                            <form role="form" method="POST" action={{ route('profile.update') }} enctype="multipart/form-data">
                                @csrf
                                <div class="card-header pb-0">
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0">Cadastrar um novo PET</p>
                                        <button type="submit" class="btn btn-primary btn-sm ms-auto">Save</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="text-uppercase text-sm">Informações Gerais do PET</p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nome</label>
                                                <input class="form-control" type="text" name="username" value="{{ old('username', auth()->user()->username) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Espécie</label>
                                                <input class="form-control" type="text" name="firstname"  value="{{ old('firstname', auth()->user()->firstname) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Raça</label>
                                                <select  class="form-control" name="" id="">
                                                    <option value="">Macho</option>
                                                    <option value="">Femea</option>
                                                </select>                                              
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Sexo</label>
                                                <select  class="form-control" name="" id="">
                                                    <option value="">Macho</option>
                                                    <option value="">Femea</option>
                                                </select>                                              
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Registro Geral Animal</label>
                                                <select  class="form-control" name="" id="">
                                                    <option value="">Macho</option>
                                                    <option value="">Femea</option>
                                                </select>                                              
                                            </div>
                                        </div>
                                        
                                        {{-- <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">First name</label>
                                                <input class="form-control" type="text" name="firstname"  value="{{ old('firstname', auth()->user()->firstname) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Last name</label>
                                                <input class="form-control" type="text" name="lastname" value="{{ old('lastname', auth()->user()->lastname) }}">
                                            </div>
                                        </div> --}}
                                    </div>
                                    <hr class="horizontal dark">
                                    <p class="text-uppercase text-sm">Informações adicionais do PET</p>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Cor</label>
                                                <input class="form-control" type="text" name="address"
                                                    value="{{ old('address', auth()->user()->address) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Idade</label>
                                                <input class="form-control" type="text" name="country" value="{{ old('country', auth()->user()->country) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Data de Nascimento</label>
                                                <input class="form-control" type="text" name="city" value="{{ old('city', auth()->user()->city) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Descrição</label>
                                                <input class="form-control" type="text" name="postal" value="{{ old('postal', auth()->user()->postal) }}">
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="horizontal dark">
                                    <p class="text-uppercase text-sm">Tutor</p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">About me</label>
                                                <input class="form-control" type="text" name="about"
                                                    value="{{ old('about', auth()->user()->about) }}">
                                            </div>
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