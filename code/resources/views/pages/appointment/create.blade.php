@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'PETS'])
    <div class="row mt-4 mx-4">
        <div class="col-12">
            
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Agendamento de Vacinação</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" method="POST" action={{ route('appointment.store') }} enctype="multipart/form-data">
                                @csrf
                                <p class="text-uppercase text-sm">Informações sobre o agendamento</p>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">RGA</label>
                                            <input class="form-control" type="text" name="rgaAppointment"  value="{{ old('rgaAppointment') }}">                                            
                                            @error('rgaAppointment') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Data da vacinação</label>
                                            <input class="form-control" type="date" name="dateAppointment"  value="{{ old('dateAppointment') }}">
                                            
                                            @error('dateAppointment') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Horário</label>
                                            <input class="form-control"  type="time" name="timeAppointment" value="{{ old('timeAppointment') }}" >

                                            @error('timeAppointment') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Local da vacinação</label>
                                            <select  class="form-select form-control" id="single-select-field" data-placeholder="Selecione um local" name="localAppointment" id="localAppointment">
                                                <option ></option>
                                                @foreach($locals as $local)
                                                    <option value="{{ $local->id }}">{{ $local->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('localAppointment') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                        </div>
                                    </div>
                      

                                   
                                </div>                               
                                <hr class="horizontal dark">

                                <div class="row">
                                    <div class="d-flex align-items-center">                                                                      
                                        <button type="submit" class="btn btn-primary btn-sm ms-auto">Registrar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

@endsection
