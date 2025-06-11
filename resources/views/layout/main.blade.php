<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simponi | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: #f7fafd;
            font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
        }
        .sidebar {
            background: #e3ecfa;
            min-height: 100vh;
            color: #174ea6;
            width: 240px;
            position: fixed;
            top: 0; left: 0; bottom: 0;
            z-index: 1030;
            padding-top: 1.5rem;
            border-right: 1px solid #d0d7e6;
            transition: left 0.3s;
        }
        .sidebar .nav-link {
            color: #174ea6;
            font-weight: 500;
            border-radius: 8px;
            margin-bottom: 4px;
            transition: background 0.2s, color 0.2s;
            font-size: 1.05rem;
            letter-spacing: 0.01em;
        }
        .sidebar .nav-link.active, .sidebar .nav-link:hover {
            background: #c7dcfa;
            color: #2563eb;
        }
        .sidebar .nav-link i {
            margin-right: 10px;
        }
        .sidebar .sidebar-logo {
            text-align: center;
            margin-bottom: 2rem;
        }
        .sidebar .sidebar-logo img {
            width: 56px;
            margin-bottom: 0.5rem;
        }
        .sidebar .sidebar-logo h5 {
            margin-bottom: 0;
            font-weight: 700;
            color: #174ea6;
            letter-spacing: 0.02em;
        }
        .main-content {
            margin-left: 240px;
            min-height: 100vh;
            padding: 0;
            transition: margin-left 0.3s;
        }
        .header {
            background: #f0f6ff;
            color: #174ea6;
            padding: 1rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 1020;
            border-bottom: 1px solid #e3ecfa;
        }
        .header .profile {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .header .profile img {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #e3ecfa;
        }
        .header .profile .fw-semibold {
            font-size: 1rem;
        }
        .app-content {
            padding: 2rem;
        }
        .card-custom {
            border-radius: 18px;
            box-shadow: 0 2px 16px rgba(0,0,0,0.04);
            background: #fff;
        }
        .nav-tabs .nav-link.active {
            background: #e3ecfa;
            color: #2563eb;
            border: none;
            border-radius: 20px;
        }
        .nav-tabs .nav-link {
            border: none;
            color: #174ea6;
            border-radius: 20px;
        }
        footer {
            background: transparent;
        }
        /* Responsive sidebar */
        @media (max-width: 991.98px) {
            .sidebar {
                left: -240px;
            }
            .sidebar.show {
                left: 0;
            }
            .main-content {
                margin-left: 0;
            }
            .header {
                padding: 1rem 1rem;
            }
        }
        .sidebar-backdrop {
            display: none;
        }
        .sidebar.show + .sidebar-backdrop {
            display: block;
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.2);
            z-index: 1029;
        }
        .sidebar-toggler {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: #174ea6;
            margin-right: 1rem;
        }
        @media (max-width: 991.98px) {
            .sidebar-toggler {
                display: inline-block;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar d-flex flex-column" id="sidebarMenu">
        <div class="sidebar-logo">
            <img src="{{ asset('foto/umdplogo.png') }}" alt="Logo MDP">
            <h5>Simponi</h5>
            <small style="font-size: 0.9rem; color:#2563eb;">Sistem Pembelajaran Online</small>
        </div>
        <nav class="flex-grow-1">
            <ul class="nav flex-column">
                <li class="nav-item"><a href="{{ url('dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}"><i class="bi bi-house"></i> Dashboard</a></li>
                <li class="nav-item"><a href="{{ url('fakultas') }}" class="nav-link {{ request()->is('fakultas') ? 'active' : '' }}"><i class="bi bi-mortarboard"></i> Fakultas</a></li>
                <li class="nav-item"><a href="{{ url('prodi') }}" class="nav-link {{ request()->is('prodi') ? 'active' : '' }}"><i class="bi bi-lightbulb"></i> Program Studi</a></li>
                <li class="nav-item"><a href="{{ url('mahasiswa') }}" class="nav-link {{ request()->is('mahasiswa') ? 'active' : '' }}"><i class="bi bi-person-lines-fill"></i> Mahasiswa</a></li>
                <li class="nav-item"><a href="{{ url('sesi') }}" class="nav-link {{ request()->is('sesi') ? 'active' : '' }}"><i class="bi bi-building"></i> Sesi</a></li>
                <li class="nav-item"><a href="{{ url('mata_kuliah') }}" class="nav-link {{ request()->is('mata_kuliah') ? 'active' : '' }}"><i class="bi bi-journals"></i> Mata Kuliah</a></li>
                <li class="nav-item"><a href="{{ url('jadwal') }}" class="nav-link {{ request()->is('jadwal') ? 'active' : '' }}"><i class="bi bi-calendar-check"></i> Jadwal</a></li>
                <li class="nav-item"><a href="{{ url('profile') }}" class="nav-link {{ request()->is('profile') ? 'active' : '' }}"><i class="bi bi-person-circle"></i> Profil</a></li>
            </ul>
        </nav>
    </div>
    <div class="sidebar-backdrop" id="sidebarBackdrop"></div>
    <!-- Main Content -->
    <div class="main-content">
        <div class="header">
            <button class="sidebar-toggler d-lg-none" id="sidebarToggle"><i class="bi bi-list"></i></button>
            <div>
                <span class="fw-bold fs-5">@yield('title', 'Dashboard')</span>
            </div>
            <div class="profile dropdown">
                <i class="bi bi-bell-fill fs-5"></i>
                <span class="fw-semibold">{{ Auth::user()->name ?? 'User' }}</span>
                <span class="badge bg-primary-subtle text-primary-emphasis">{{ Auth::user()->username ?? '' }}</span>
                <img src="{{ asset('assets/img/user2-160x160.jpg')}}" alt="User" data-bs-toggle="dropdown" style="cursor:pointer;">
                <ul class="dropdown-menu dropdown-menu-end mt-2">
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="bi bi-person-circle me-2"></i>Profil
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="dropdown-item" type="submit">
                                <i class="bi bi-box-arrow-right me-2"></i>Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <div class="app-content">
            @yield('content')
        </div>
        <footer class="text-center py-3 text-secondary small">
            &copy; {{ date('Y') }} Universitas MDP. All rights reserved.
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script>
        // Sidebar toggle for mobile
        const sidebar = document.getElementById('sidebarMenu');
        const sidebarBackdrop = document.getElementById('sidebarBackdrop');
        const sidebarToggle = document.getElementById('sidebarToggle');
        if(sidebarToggle){
            sidebarToggle.addEventListener('click', function() {
                sidebar.classList.toggle('show');
                sidebarBackdrop.classList.toggle('show');
            });
        }
        if(sidebarBackdrop){
            sidebarBackdrop.addEventListener('click', function() {
                sidebar.classList.remove('show');
                sidebarBackdrop.classList.remove('show');
            });
        }

        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var nama = $(this).data("nama");
            event.preventDefault();
            swal({
                title: `Apakah Anda yakin ingin menghapus data ${nama} ini?`,
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
        });
    </script>
    @if(session('success'))
    <script>
        swal({
            title: "Good job!",
            text: "{{ session('success') }}",
            icon: "success"
        });
    </script>
    @endif
</body>
</html>
