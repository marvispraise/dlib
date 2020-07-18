<div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
    <ul class="navbar-nav mr-lg-2 d-none d-lg-flex">
        <li class="nav-item nav-toggler-item">
            <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
        </li>
        <li class="nav-item nav-search d-none d-lg-flex">
            <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
                </div>
                <input type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="search">
            </div>
        </li>
    </ul>
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="{{ route('index') }}"><img src="{{ asset('images/logo-dark.png') }}" alt="logo" width="150px"/></a>
        <a class="navbar-brand brand-logo-mini" href="{{ route('index') }}"><img src="{{ asset('images/logo.png') }}" alt="logo" /></a>
    </div>
    <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown" href="#" data-toggle="dropdown" id="profileDropdown">
                <img src="../../../../images/faces/face5.jpg" alt="profile"/>
                <span class="nav-profile-name">Evan Morales</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item">
                    <i class="mdi mdi-google-circles-communities text-primary"></i>
                    Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item">
                    <i class="mdi mdi-logout text-primary"></i>
                    Logout
                </a>
            </div>
        </li>
        <li class="nav-item nav-toggler-item-right d-lg-none">
            <button class="navbar-toggler align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </li>
    </ul>
</div>
