   <!-- Sidebar -->
   <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard.admin') }}">
        <div class="sidebar-brand-text mx-3">Beasiswa</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard.admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('manage_user.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Manage User</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('tahun.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Tahun</span></a>
    </li>


    <li class="nav-item active">
        <a class="nav-link" href="{{ route('semester.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Semester</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('jurusan.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Jurusan</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('mahasiswa.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Mahasiswa</span></a>
    </li>


    <li class="nav-item active">
    <a class="nav-link" href="{{ route('perpanjangan.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Perpanjangan</span></a>
    </li>


    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dataaset.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dataset</span></a>
        </li>


    <li class="nav-item active">
        <a class="nav-link" href="{{ route('kakulasi.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Kakulasi</span></a>
        </li>


        <li class="nav-item active">
            <a class="nav-link" href="{{ route('perhitungan.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Perhitungan</span></a>
            </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
<!-- End of Sidebar -->
