<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">

        @if(auth()->user()->level != 0)
        <li class="nav-item">
            <a class="nav-link" href="{{ route('index') }}">
                <i class="mdi mdi-view-quilt menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('viewTape') }}">
                <i class="mdi mdi-database menu-icon"></i>
                <span class="menu-title">All Items</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-palette menu-icon"></i>
                <span class="menu-title">Library Section</span>
                <i class="mdi mdi-chevron-down"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('viewLibrary') }}">Library</a></li>
                </ul>
            </div>
        </li>
        @if(auth()->user()->level == 2)
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
                <i class="mdi mdi-layers menu-icon"></i>
                <span class="menu-title">User Section</span>
                <i class="mdi mdi-chevron-down"></i>
            </a>
            <div class="collapse" id="ui-advanced">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('viewUser') }}">Users</a></li>
                </ul>
            </div>
        </li>
        @endif
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="mdi mdi-view-headline menu-icon"></i>
                <span class="menu-title">Tape Section</span>
                <i class="mdi mdi-chevron-down"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{route('tapeRequest')}}">Tape Requests</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('viewTapeLL')}}">Tape Login and Logout</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
                <i class="mdi mdi-pencil-box-outline menu-icon"></i>
                <span class="menu-title">Program Section</span>
                <i class="mdi mdi-chevron-down"></i>
            </a>
            <div class="collapse" id="editors">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{route('viewProgram')}}">Programs</a></li>
                </ul>
            </div>
        </li>

        @endif
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                    <i class="mdi mdi-chart-pie menu-icon"></i>
                    <span class="menu-title">Request Section</span>
                    <i class="mdi mdi-chevron-down"></i>
                </a>
                <div class="collapse" id="charts">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{route('requestForm')}}">Tapes Order</a></li>
                    </ul>
                </div>
            </li>
        @include('layouts.app')
    </ul>
</nav>
