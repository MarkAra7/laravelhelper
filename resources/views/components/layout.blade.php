<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Layout' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="navbar">
        <div class="navbar-brand">
            <h1>{{ $title ?? 'Product Manager' }}</h1>
        </div>
        <nav class="navbar-nav">
            <x-navigation />
        </nav>
    </header>

    <main class="content">
        @if (session('status'))
            <div class="alert-success">{{ session('status') }}</div>
        @endif

        <div class="page-header">
            <h2>{{ $header ?? 'Page' }}</h2>
        </div>
        
        <hr>
        
        {{ $slot }}
    </main>
</body>
</html>
