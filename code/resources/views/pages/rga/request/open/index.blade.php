@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'PETS'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-lg mx-4 ">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Lista de solicitações de RGA pendentes</p>                                
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="table-responsive p-0">
                            <table class="table mx-auto text-center mb-0">
                                <thead>
                                    <tr>              
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Código da solicitação</th>
        
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nome do solicitante
                                        </th>   
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Espécie
                                        </th>  
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Perfil
                                        </th>                            
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Processo</th>
                                    </tr>
                                </thead>
                                <tbody>  
                                    @foreach ($rgas as $rga)
                                        <tr>
                                            <td style="text-align: center;">
                                                {{ $rga->id }}
                                            </td>
                                            <td>
                                                {{ $rga->nameTutor }}
                                            </td>
                                            <td>
                                                {{ $rga->specie->specie}}
                                                {{-- <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                                   Delete</p>
                                                </div> --}}
                                            </td>
                                            <td>
                                                {{ $rga->profilePet->Profile }}

                                            </td>
                                            <td>
                                                <a href="{{ route('rga.show',$rga->id) }}" class="btn btn-primary"><i class="far fa-eye"></i> Visualizar</a>
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
    </div>
    @include('layouts.footers.auth.footer')

    <script type="text/javascript">

    
    </script>
    
@endsection
