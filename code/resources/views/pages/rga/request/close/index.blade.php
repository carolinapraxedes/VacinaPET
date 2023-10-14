@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'PETS'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-lg mx-4 ">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Lista de solicitações de RGA concluído</p>                                
                        </div>
                    </div> 
                    @if(count($process)>0)                             
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
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Data da solicitação
                                            </th>   
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Status
                                            </th>                             
                                            
                                        </tr>
                                    </thead>
                                    <tbody>  
                                        @foreach ($process as $item )
                                            <tr>
                                                <td style="text-align: center;">
                                                    {{ $item->id }}
                                                </td>
                                                <td>
                                                    {{ $item->rga->nameTutor}}
                                                </td>
                                                <td>
                                                    {{ $item->rga->specie->specie}}
                                                    {{-- <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                                    Delete</p>
                                                    </div> --}}
                                                </td>
                                                <td>
                                                    {{ $item->rga->provenancePet->Provenance}}
                                                </td>
                                                <td>
                                                    {{ \Carbon\Carbon::parse($item->requestDate)->format('d/m/Y') }}
                                                </td>
                                                <td>
                                                    <span class="badge bg-gradient-info">{{ $item->status }}</span>
                                                    
                                                </td>
                                               
                                            </tr>
                                        @endforeach
                                            
                                    
        
                                    </tbody>
                                </table>
                            </div>
                        </div>                             
                    @else
                        <div class="card-body p-3">
                            <p class="text-center my-auto"><strong>Nenhum processo pendente foi encontrado.</strong></p>
                        </div>                                                
                    @endif
                    <div class="row mx-5">
                        <div class="d-flex  justify-content-end">

                            <a class="btn btn-primary" href="{{ route('rga.index') }}">Voltar</a>
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
