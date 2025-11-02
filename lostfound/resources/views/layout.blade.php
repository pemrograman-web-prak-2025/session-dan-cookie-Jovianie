<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost & Found - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Mancunian:wght@400;700&family=Fredoka:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <div class="container">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <h1>Lost & Found</h1>
                <div style="display: flex; align-items: center; gap: 15px;">
                    <button id="darkModeToggle" class="dark-mode-toggle">🌙 Dark</button>
                    @auth
                        <span style="color: #697254; font-weight: 500;">{{ Auth::user()->name }}</span>
                        <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
                            @csrf
                            <button type="submit" class="btn btn-sm">Logout</button>
                        </form>
                    @endauth
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>