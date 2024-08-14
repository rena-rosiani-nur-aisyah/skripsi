<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">HerFlow</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">HF</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard Admin</li>
            <li class="active"><a href="/Admin" class="nav-link"> <i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            {{-- <a href="/Admin" class="nav-link has-dropdown"> <i class="fas fa-fire"></i></a> --}}

            <li class="menu-header">Starter</li>
            <li class="nav-item"><a class="nav-link" href="/jenis"><i class="fas fa-clipboard"></i>
                    <span>Jenis Diagnosis Darah</span></a></li>
            </li>
            <li class="nav-item"><a class="nav-link" href="/gejala"><i class="fas fa-list"></i>
                    <span>Gejala</span></a></li>
            <li class="nav-item">
                <a href="/hasilDiagnosis" class="nav-link">
                    <i class="fas fa-stethoscope"></i>
                    <span>Diagnosis</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i>
                    <span>Basis Pengetahuan</span></a>
                <ul class="dropdown-menu">
                    <li class="active"><a class="nav-link" href="/Dashboard/Artikel">
                            Artikel</a></li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="/rules"><i
                        class="bi bi-diagram-3"></i><span>Rules</span></a></li>
            <li class="menu-header">Data</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Profile</span></a>
                <ul class="dropdown-menu">
                    <li><a href="/Puser">User</a></li>
                    {{-- <li><a class="beep beep-sidebar" href="/admin">Admin</a></li> --}}
                </ul>
            </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Logout
            </a>
        </div>
    </aside>
</div>
