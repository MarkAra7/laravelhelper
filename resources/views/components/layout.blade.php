<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Layout' }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <header>
        <h2>{{ $title ?? 'Layout' }}</h2>
    </header>

    <nav>
        <x-navigation />
    </nav>

    <main>
        @if (session('status'))
            <div class="alert-success">
                {{ session('status') }}
            </div>
        @endif

        <h1>{{ $header ?? 'Error' }}</h1>
        <hr/>
        {{ $slot }}
    </main>
</body>
</html>
