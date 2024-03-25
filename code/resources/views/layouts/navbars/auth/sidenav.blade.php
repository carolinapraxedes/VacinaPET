<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 text-center" href="{{ route('home') }}"
            target="_blank">
            <img src="{{ asset('assets/img/logos/vacinapet.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">VacinaPET</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main"> 
        <ul class="navbar-nav dropdown">
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>  
            <li class="nav-item mt-3 d-flex align-items-center">
                <div class="ps-4">                   
                    <i class="fas fa-paw" style="color: #f4645f;"></i>
                </div>
                <h6 class="ms-2 text-uppercase text-xs font-weight-bolder opacity-6 mb-0">PET</h6>

                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'pets.index' ? 'active' : '' }}" href="{{ route('pets.index') }}">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-bars text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Meus animais</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ Route::currentRouteName() == 'pets.create' ? 'active' : '' }}" href="{{ route('pets.create') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="far fa-plus-square text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Novo animal</span>
                    </a>
                </li>

            </li>

            <li class="nav-item mt-3 d-flex align-items-center">
                <div class="ps-4">                   
                    <i class="fa fa-address-card" style="color: #f4645f;"></i>
                </div>
                <h6 class="ms-2 text-uppercase text-xs font-weight-bolder opacity-6 mb-0">RGA</h6>

                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'rga.index' ? 'active' : '' }}" href="{{ route('rga.index') }}">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-tasks text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Processos</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ Route::currentRouteName() == 'rga.search' ? 'active' : '' }}" href="{{ route('rga.search') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-search text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Procurar RGA</span>
                    </a>
                </li>
            </li>
            <li class="nav-item mt-3 d-flex align-items-center">
                <div class="ps-4">                   
                    <i class="fa fa-medkit" style="color: #f4645f;"></i>
                </div>
                <h6 class="ms-2 text-uppercase text-xs font-weight-bolder opacity-6 mb-0">Vacinação</h6>

                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'vaccination.create' ? 'active' : '' }}" href="{{ route('vaccination.create') }}">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-pencil-square-o text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Registrar</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ Route::currentRouteName() == 'vaccination.proof' ? 'active' : '' }}" href="">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-text text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Comprovantes</span>
                    </a>
                </li>
            </li>
            <li class="nav-item mt-3 d-flex align-items-center">
                <div class="ps-4">                   
                    <i class="fa fa-address-book-o" style="color: #f4645f;"></i>
                </div>
                <h6 class="ms-2 text-uppercase text-xs font-weight-bolder opacity-6 mb-0">Agendamentos</h6>

                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'appointment.create' ? 'active' : '' }}" href="{{ route('appointment.index') }}">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="far fa-id-card text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Agendar</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ Route::currentRouteName() == 'appointment.history' ? 'active' : '' }}" href="">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-bars text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Histórico de Agendamentos</span>
                    </a>
                </li>
            </li>
            <li class="nav-item mt-3 d-flex align-items-center">
                <div class="ps-4">                   
                    <i class="fa fa-users" style="color: #f4645f;"></i>
                </div>
                <h6 class="ms-2 text-uppercase text-xs font-weight-bolder opacity-6 mb-0">Administração</h6>

                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'admin.vet' ? 'active' : '' }}" href="">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-user-md text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Registrar Veterinário</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ Route::currentRouteName() == 'admin.local' ? 'active' : '' }}" href="">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="far fa-plus-square text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Registrar local</span>
                    </a>
                </li>
                
            </li>
          
        </ul>
    </div> 
    
</aside>
