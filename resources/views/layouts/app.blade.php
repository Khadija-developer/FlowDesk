<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>FlowDesk - {{ config('app.name', 'FlowDesk') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body { background-color: #f1f5f9; }

        /* Sidebar */
        #sidebar {
            width: 250px;
            min-height: 100vh;
            background: #1e293b;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
        }

        #sidebar .brand {
            padding: 20px;
            color: #fff;
            font-size: 22px;
            font-weight: 700;
            border-bottom: 1px solid #334155;
        }

        #sidebar .brand span {
            color: #6366f1;
        }

        #sidebar .nav-link {
            color: #94a3b8;
            padding: 12px 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            transition: all 0.2s;
        }

        #sidebar .nav-link:hover,
        #sidebar .nav-link.active {
            color: #fff;
            background: #334155;
            border-left: 3px solid #6366f1;
        }

        #sidebar .nav-link i {
            font-size: 18px;
        }

        /* Main Content */
        #main-content {
            margin-left: 250px;
        }

        /* Navbar */
        #topnav {
            background: #fff;
            padding: 15px 25px;
            border-bottom: 1px solid #e2e8f0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #topnav .page-title {
            font-size: 18px;
            font-weight: 600;
            color: #1e293b;
        }

        .content-area {
            padding: 25px;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div id="sidebar">
        <div class="brand">Flow<span>Desk</span></div>
        <nav class="mt-3">
            <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
            {{-- <a href="#" class="nav-link">
                <i class="bi bi-people"></i> Clients
            </a> --}}
            <a href="{{ route('clients.index') }}" class="nav-link {{ request()->routeIs('clients*') ? 'active' : '' }}">
    <i class="bi bi-people"></i> Clients
</a>
            <a href="#" class="nav-link">
                <i class="bi bi-folder"></i> Projects
            </a>
            <a href="#" class="nav-link">
                <i class="bi bi-check2-square"></i> Tasks
            </a>
            <a href="#" class="nav-link">
                <i class="bi bi-receipt"></i> Invoices
            </a>
            <a href="#" class="nav-link">
                <i class="bi bi-cash-stack"></i> Payments
            </a>
            <a href="#" class="nav-link">
                <i class="bi bi-gear"></i> Settings
            </a>
        </nav>
    </div>

    <!-- Main Content -->
    <div id="main-content">

        <!-- Top Navbar -->
        <div id="topnav">
            <div class="page-title">{{ $pageTitle ?? 'Dashboard' }}</div>
            <div class="d-flex align-items-center gap-3">
                <span class="text-muted" style="font-size:14px;">
                    <i class="bi bi-person-circle"></i>
                    {{ Auth::user()->name }}
                </span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-outline-danger">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </button>
                </form>
            </div>
        </div>

        <!-- Page Content -->
        <div class="content-area">
            {{ $slot }}
        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>