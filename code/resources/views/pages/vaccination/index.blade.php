@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'PETS'])

    <div class="card shadow-lg mx-4 card-profile-bottom">
        <div class="card-body p-3">
            <div class="row gx-4">              

                        <h5 class="mb-1">
                            Vacinação
                        </h5>
                        <div class="row">
                            <p>
                                Informe o RGA do animal que deseja registrar a vacinação
                            </p>
                            <div class="col-md-12">
                                <form role="form" method="POST" action={{ route('pets.store') }} enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">                                   
                                        <input class="form-control" type="text" name="namePet"  value="{{ old('namePet') }}" >
                                        @error('namePet') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror                                    
                                    </div>
                                    <div class="d-flex align-items-center">
                                                                               
                                        <button type="submit" class="btn btn-primary btn-sm ms-auto">Registrar</button>
                                    </div>
                                </form>
                            </div>
                            <hr class="horizontal dark">


            </div>
        </div>
    </div>
    {{-- <div class="row mt-4 mx-4">
        <div class="col-12">            
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Vacinação</h6>
                </div>
                <div class="card-body ">
                    <div class="row">
                        <p>
                            Informe o RGA do animal que deseja registrar a vacinação
                        </p>
                        <div class="col-md-12">
                            <form role="form" method="POST" action={{ route('pets.store') }} enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">                                   
                                    <input class="form-control" type="text" name="namePet"  value="{{ old('namePet') }}" >
                                    @error('namePet') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror                                    
                                </div>
                                <div class="d-flex align-items-center">
                                                                           
                                    <button type="submit" class="btn btn-primary btn-sm ms-auto">Registrar</button>
                                </div>
                            </form>
                        </div>
                        <hr class="horizontal dark">
                
                </div>
            </div>
        </div>
    </div> --}}

@endsection