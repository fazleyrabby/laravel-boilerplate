<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark sidebar active" id="sidebar">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-4">Dashboard</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link text-white" aria-current="page">
                <i class="fas fa-home"></i>&nbsp;Home
            </a>
        </li>
        {{-- <li class="nav-item">
            <a href="./index.html" class="nav-link text-white active" aria-current="page">
                <i class="fas fa-home"></i>&nbsp;Home
            </a>
        </li> --}}
        {{-- <li class="nested nav-item">
            <button class="btn btn-toggle align-items-center rounded false" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="true">
                <i class="fas fa-cog"></i>&nbsp;Modules
                <span class="dropdown-icon"><i class="fas fa-sort-down"></i></span>
            </button>
            <div class="collapse false" id="orders-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small dropdown-menu-dark">
                    <li><a class="dropdown-item false" href="./form-elements.html">Form Elements</a></li>
                    <li><a class="dropdown-item false" href="./table.html">Tables</a></li>
                </ul>
            </div>
        </li> --}}
    
{{--     
        <li>
            <a href="fullcalender.html" class="nav-link text-white false">
                <i class="fas fa-calendar-alt"></i>
                Fullcalender
            </a>
        </li>
    
        <li>
            <a href="login.html" class="nav-link text-white">
                <i class="fas fa-cogs"></i>
                Login
            </a>
        </li>
    
        <li>
            <a href="register.html" class="nav-link text-white">
                <i class="fas fa-cogs"></i>
                Register
            </a>
        </li> --}}
    </ul>
    {{-- <div>
    <a href="document.html" target="_blank" class="rounded nav-link text-white bg-secondary">
    <i class="fas fa-download"></i>
        Installation
    </a>
    </div> --}}
    <hr>
    <div class="dropdown mb-4">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://avatars.githubusercontent.com/u/26044286?v=4" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>User</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow active" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item active" href="./profile.html">Profile</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="{{ url('/logout')}}">Sign out</a></li>
        </ul>
    </div>
</div>
