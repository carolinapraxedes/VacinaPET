@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'PETS'])
    <div class="container-fluid py-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-0">Registro Geral de Animal (RGA)</h6>
                    <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam commodo tellus lorem, nec scelerisque nunc porta ut. Etiam facilisis turpis eget scelerisque venenatis.</P>
                    <hr class="horizontal dark">
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4 ">
                            <div class="card shadow">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="d-flex align-items-center">                                            
                                            <div class="icon icon-shape me-3 bg-primary shadow text-center ">
                                                <i class="fa fa-pencil-square text-white opacity-10" aria-hidden="true"></i>
                                                
                                            </div>                                          
                                            <div class="d-flex flex-column">
                                                <h3 class="text-sm  text-dark font-weight-bold mb-1">
                                                    <a href="{{ route('rga.create') }}">Solicitar registro de animal <button
                                                    class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto">
                                                    
                                                    <i class="ni ni-bold-right" aria-hidden="true"></i></button>
                                                    </a>
                                                </h3>
                                            </div>                                                   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
                            <div class="card shadow">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="d-flex align-items-center">                                            
                                            <div class="icon icon-shape me-3 bg-primary shadow text-center ">
                                                <i class="fa fa-spinner text-white opacity-10" aria-hidden="true"></i>
                                                
                                            </div>    
                                            <div class="d-flex flex-column">
                                                <h3 class="text-sm  text-dark font-weight-bold mb-1">
                                                    <a href="">Acompanhamento de solicitação<button
                                                    class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                        class="ni ni-bold-right" aria-hidden="true"></i></button>
                                                    </a>
                                                </h3>
                                            </div>                                             
                                           
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
                            <div class="card">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="d-flex align-items-center">                                           
                                            <div class="icon icon-shape  me-3 bg-primary shadow text-center ">
                                                <i class="fa fa-list text-white opacity-10" aria-hidden="true"></i>
                                                
                                            </div>
                                                                                      
                                            <div class="d-flex flex-column">
                                                <h5 class="text-sm  text-dark font-weight-bold mb-1"><a href="{{ route('rga.listOpen') }}">Solicitações pendentes 
                                                    <button
                                                    class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto">
                                                    <i class="ni ni-bold-right" aria-hidden="true"></i>
                                                    </button>
                                            </div></a></h5>                                          
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
                            <div class="card">
                                <div class="card-body p-3">
                                    <div class="row ">
                                        <div class="d-flex align-items-center">
                                            
                                            <div class="icon icon-shape me-3 bg-primary shadow text-center ">
                                                <i class="fa fa-check-square text-white opacity-10" aria-hidden="true"></i>
                                                
                                            </div>
                                           
                                            <div class="d-flex flex-column">
                                                <h5 class="text-sm  text-dark font-weight-bold mb-1"><a href="{{ route('rga.listClose') }}">Solicitações concluídas <button
                                                    class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                        class="ni ni-bold-right" aria-hidden="true"></i></button>
                                            </div></a></h5>    
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>
    @include('layouts.footers.auth.footer')
    </div>
@endsection
