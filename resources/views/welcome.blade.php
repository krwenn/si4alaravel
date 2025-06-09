<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | Laravel</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <style>
        body {
            background: linear-gradient(135deg, #f8fafc 0%, #e0e7ef 100%);
            min-height: 100vh;
            font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
        }
        .welcome-card {
            background: #fff;
            border-radius: 1.5rem;
            box-shadow: 0 8px 32px 0 rgba(37,99,235,0.08), 0 1.5px 8px 0 rgba(0,0,0,0.04);
            padding: 2.5rem 2rem;
            max-width: 420px;
            margin: auto;
            margin-top: 5vh;
            border: 1px solid #e5e7eb;
            transition: box-shadow 0.2s;
        }
        .welcome-card:hover {
            box-shadow: 0 12px 40px 0 rgba(37,99,235,0.13), 0 2px 12px 0 rgba(0,0,0,0.07);
        }
        .welcome-logo {
            display: flex;
            justify-content: center;
            margin-bottom: 2rem;
        }
        .welcome-title {
            font-size: 2.2rem;
            font-weight: 700;
            color: #18181b;
            margin-bottom: 0.5rem;
            letter-spacing: -1px;
            text-align: center;
        }
        .welcome-desc {
            color: #64748b;
            margin-bottom: 2rem;
            font-size: 1.1rem;
            text-align: center;
        }
        .welcome-btn {
            background: #2563eb;
            color: #fff !important;
            padding: 0.75rem 2rem;
            border-radius: 0.75rem;
            font-weight: 600;
            font-size: 1rem;
            box-shadow: 0 2px 8px 0 rgba(37,99,235,0.08);
            border: none;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
            text-decoration: none;
            transition: background 0.2s, color 0.2s;
            display: inline-block;
        }
        .welcome-btn:hover, .welcome-btn:focus {
            background: #1e40af;
            color: #fff !important;
        }
        .welcome-btn-outline {
            background: #fff;
            color: #2563eb !important;
            border: 2px solid #2563eb;
        }
        .welcome-btn-outline:hover, .welcome-btn-outline:focus {
            background: #2563eb;
            color: #fff !important;
        }
        .welcome-link {
            color: #2563eb;
            text-decoration: underline;
            font-weight: 500;
            transition: color 0.2s;
        }
        .welcome-link:hover {
            color: #1e40af;
        }
        @media (max-width: 600px) {
            .welcome-card { padding: 1.5rem 0.5rem; }
            .welcome-title { font-size: 1.5rem; }
        }
        .dark-mode {
            background: #18181b !important;
            color: #f1f5f9 !important;
        }
        .dark-mode .welcome-card {
            background: #23272f !important;
            border: 1px solid #334155 !important;
            color: #f1f5f9 !important;
        }
        .dark-mode .welcome-title { color: #fff !important; }
        .dark-mode .welcome-desc { color: #94a3b8 !important; }
        .dark-mode .welcome-btn { background: #2563eb !important; color: #fff !important; }
        .dark-mode .welcome-btn:hover { background: #1e40af !important; }
        .dark-mode .welcome-link { color: #60a5fa !important; }
    </style>
</head>
<body class="{{ request()->cookie('theme') === 'dark' ? 'dark-mode' : '' }}">
    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="welcome-card shadow-lg">
            <div class="welcome-logo">
                <svg width="64" height="64" viewBox="0 0 64 64" fill="none">
                    <rect width="64" height="64" rx="16" fill="#2563eb"/>
                    <text x="50%" y="55%" text-anchor="middle" fill="#fff" font-size="32" font-family="Arial" dy=".3em">L</text>
                </svg>
            </div>
            <div class="welcome-title">Welcome to Laravel</div>
            <div class="welcome-desc">
                Start your journey with a modern, clean, and powerful PHP framework.<br>
                Explore documentation, tutorials, or jump right into your dashboard.
            </div>
            <div class="text-center mb-2">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="welcome-btn btn">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="welcome-btn btn">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="welcome-btn btn welcome-btn-outline">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
            <div class="text-center" style="margin-top:1.5rem;">
                <a href="https://laravel.com/docs" target="_blank" class="welcome-link">Documentation</a>
                &nbsp;|&nbsp;
                <a href="https://laracasts.com" target="_blank" class="welcome-link">Laracasts</a>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
