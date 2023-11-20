@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'PETS'])
    <div class="container-fluid py-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-0">Busca de animal de estimação por RGA</h6>
                    <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam commodo tellus lorem, nec scelerisque
                        nunc porta ut. Etiam facilisis turpis eget scelerisque venenatis.</P>
                </div>
                <div class="card-body p-3">
                    <form role="form" method="POST" action={{ route('rga.searching') }} enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            
                            <input class="form-control" type="text" id="searchRGA" name="searchRGA" placeholder="Digite aqui.."
                                value="{{ old('searchRGA') }}">
                            @error('searchRGA')
                                <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                            @enderror

                        </div>
                        <div class="row">
                            <div class="d-flex align-items-center">
                                                               
                                <button type="submit" class="btn btn-primary btn-sm ms-auto">Buscar</button>
                            </div>
                        </div>
                    </form>
                    <div>
                        <hr class="horizontal dark">
                    </div>

                </div>
            </div>
        </div>


        @include('layouts.footers.auth.footer')
    </div>
    <script>
        $(document).ready(function () {
            $('#searchRGA').on('keyup', function () {
                var value = $(this).val();
                console.log(value);
                $.ajax({
                    type: 'get',
                    url: '{{ route('rga.searching') }},
                    res:{'searchRGA':value}
                    resType: "resType"
                    success: function (res) {                        
                        console.log(res);
                    }
                });
            });
        });
    </script>
@endsection
