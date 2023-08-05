@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'REGISTRAR VACINAÇÃO'])
    <div class="row mt-4 mx-4">
        <div class="col-12">
            
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Registrar Vacinação</h6>
                </div>
                <div class="card-body ">
                    <div>
                        <div class="row">
                            <div class="col-md-4">
                                <form role="form" method="POST" action={{ route('pets.store') }} enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        
                                        <input class="form-control" type="text" name="namePet"  value="{{ old('namePet') }}" >
                                        @error('namePet') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                        
                                    </div>

                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection