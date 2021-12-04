<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #105d3b; opacity: 95%" >
    <div class="container">
        <a href="{{ route('home') }}"><img src="{{ asset('foto/logo/1.jpg') }}" width="100" alt=""></a>
        <a class="p-lg-3 p-sm-0 navbar-brand fw-bold" href=" {{ route('home') }}"> <span class="text-success">Green
                Geo</span> <span style="color: #dab96a">Sinergi</span> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link {{ \Route::is('home') ? 'active' : 'text-light' }} fw-bold fs-4 text-center mt-2 mt-lg-0" style="color: #dab96a"
                        href="{{ route('home') }}"> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ \Route::is('about') ? 'active' : 'text-light' }} fw-bold fs-4 text-center" style="color: #dab96a"
                        href="{{ route('about') }}" style="hover">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ \Route::is('service') ? 'active' : 'text-light' }} fw-bold fs-4 text-center" style="color: #dab96a"
                        href="{{ route('service') }}" style="hover">Service</a>
                </li>
                <div class="nav-item">
                    <a class="nav-link {{ \Route::is('project') ? 'active' : 'text-light' }} fw-bold fs-4 text-center" style="color: #dab96a"
                        href="{{ route('project') }}">Project List</a>
                </div>

            </ul>
            <div class="navbar-nav ms-auto">

                <div class="nav-item ">
                    <a class="nav-link {{ \Route::is('contact') ? 'active' : 'text-light' }} fw-bold fs-4 text-center" style="color: #dab96a"
                        href="{{ route('contact') }}">Contact</a>
                </div>
            </div>
        </div>
    </div>
</nav>
