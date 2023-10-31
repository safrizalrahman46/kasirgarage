<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" >
        <div class="">
            <i class="fa fa-fw fa-home"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Data Siswa <sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <div class="sidebar-heading">
        Menu Sidebar
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link " href="{{ url('/halamanutama') }}">
            <i class="fas fa-globe-europe"></i>
            <span>Beranda</span></a>
    </li>

      <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa fa-user-circle-o"></i>
            <span>Tentang Siswa</span>
        </a>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
            <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
                <a class="collapse-item" href="{{ url('/siswa') }}">Siswa</a>
                <a class="collapse-item" href="{{ url('/siswa/create') }}">Input Siswa</a>
            </div>
        </div>
    </li>

      <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa fa-user-circle-o"></i>
            <span>Tentang Guru</span>
        </a>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
            <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
                <a class="collapse-item" href="{{ url('/guru') }}">Guru</a>
                <a class="collapse-item" href="{{ url('/guru/create') }}">Input Guru</a>
            </div>
        </div>
    </li>

      <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa fa-user-circle-o"></i>
            <span>Tentang Mapel</span>
        </a>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
            <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
                <a class="collapse-item" href="{{ url('/mapel') }}">Mapel</a>
                <a class="collapse-item" href="{{ url('/mapel/create') }}">Input Mapel</a>
            </div>
        </div>
    </li>

      <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa fa-user-circle-o"></i>
            <span>Nilai Siswa</span>
        </a>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
            <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
                <a class="collapse-item" href="{{ url('/nilai') }}">Nilai</a>
                <a class="collapse-item" href="{{ url('/nilai/create') }}">Input Nilai Siswa</a>
            </div>
        </div>
    </li>




    //Percobaan
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/siswa/guru') }}">
            <i class="fa fa-user-circle-o"></i>
            <span>Data Guru</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/guru/mapel') }}">
            <i class="fa fa-user-circle-o"></i>
            <span>Data Mapel</span></a>
    </li>

{{-- //siswa --}}
    {{-- <li class="nav-item active">
        <a class="nav-link" href="{{ url('/siswa') }}">
            <i class="fa fa-user-circle-o"></i>
            <span>Data Siswa</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/siswa/create') }}">
            <i class="fa fa-user-circle-o"></i>
            <span>Input Data Siswa</span></a>
    </li> --}}

    {{-- //guru --}}
    {{-- <li class="nav-item active">
        <a class="nav-link" href="{{ url('/guru') }}">
            <i class="fa fa-user-circle-o"></i>
            <span>Data Tabel Guru</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/guru/create') }}">
            <i class="fa fa-user-circle-o"></i>
            <span>Input Data Guru</span></a>
    </li> --}}

    {{-- //mapel --}}
{{--
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/mapel') }}">
            <i class="fa fa-user-circle-o"></i>
            <span>Data Tabel Mapel</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/mapel/create') }}">
            <i class="fa fa-user-circle-o"></i>
            <span>Input Data Mapel</span></a>
    </li> --}}

{{-- //nilai --}}
    {{-- <li class="nav-item active">
        <a class="nav-link" href="{{ url('/nilai') }}">
            <i class="fa fa-user-circle-o"></i>
            <span>Nilai</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/nilai/create') }}">
            <i class="fa fa-user-circle-o"></i>
            <span>Input Nilai Siswa</span></a>
    </li> --}}

    <!-- Divider -->
    {{-- <hr class="sidebar-divider"> --}}

    <!-- Heading -->


    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">

        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            {{-- <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="buttons.html">Buttons</a>
                <a class="collapse-item" href="cards.html">Cards</a>
            </div> --}}
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a> --}}
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                {{-- <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Utilities:</h6>
                    <a class="collapse-item" href="utilities-color.html">Colors</a>
                    <a class="collapse-item" href="utilities-border.html">Borders</a>
                    <a class="collapse-item" href="utilities-animation.html">Animations</a>
                    <a class="collapse-item" href="utilities-other.html">Other</a>
                </div> --}}
        </div>
    </li>

    <!-- Divider -->
    {{-- <hr class="sidebar-divider"> --}}

    <!-- Heading -->
    {{-- <div class="sidebar-heading">
        Addons
    </div> --}}

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        {{-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a> --}}
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            {{-- <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
            </div> --}}
        </div>
    </li>

    <!-- Nav Item - Charts -->
    {{-- <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li> --}}

    <!-- Nav Item - Tables -->
    {{-- <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    {{-- <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div> --}}

</ul>
