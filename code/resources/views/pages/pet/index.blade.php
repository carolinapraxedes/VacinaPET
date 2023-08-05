
@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'PETS'])
<div class="row mt-4 mx-4">
    <div class="col-12">
        
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>MEUS ANIMAIS</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>              
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nome</th>

                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Espécie
                                </th>                               
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Ações</th>
                            </tr>
                        </thead>
                        <tbody>  
                            @foreach ($pets as $pet)
                                <tr>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            <div>
                                                @if ($pet->specie_id == 1)
                                                    <img src="{{ asset('assets/img/icons/dog.png') }}" class="avatar me-3" alt="image">
                                                @else
                                                    <img src="{{ asset('assets/img/icons/cat.png') }}" class="avatar me-3" alt="image">
                                                @endif
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm ">{{ ucfirst(strtolower($pet->name)) }}</h6>
                                            </div>
                                        </div>
                                        
                                    </td>
                                    <td>
                                        {{ $pet->specie_id === 1 ? 'Cachorro' : 'Gato' }}
                                    </td>
                                    <td>
                                        <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                            <p class="text-sm font-weight-bold mb-0 cursor-pointer">Edit</p>
                                            <p class="text-sm font-weight-bold mb-0 ps-2 cursor-pointer">Delete</p>
                                        </div>
                                    </td>
                                </tr>
                                
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection