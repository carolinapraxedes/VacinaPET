@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'PETS'])
    <div class="row mt-4 mx-4">
        <div class="col-12">
            
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>NOVO PET</h6>
                </div>
                <div class="card-body">
                    <a href="{{ route('appointment.create') }}">AGENDAR</a>
                    
                </div>

            </div>
        </div>
    </div>
@endsection