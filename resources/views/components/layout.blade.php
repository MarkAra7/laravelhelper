<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8" />
    <title>{{ $title ?? 'Layout' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <header class="navbar">
            <div class="navbar-brand">
                <h1>{{ $title ?? 'Product Manager' }}</h1>
            </div>
            <nav class="navbar-nav">
                <x-navigation />
            </nav>
        </header>

        <aside class="sidebar">
            @if (session('status'))
            <h2>Notifications</h2>
                <div class="alert-success">{{ session('status') }}</div>
            @endif

           <h2>Stats</h2>
        
        
        <h3>Product Count {{$productCount ?? '0'}}<h3>
          
           
            
        </aside>

        <main class="content">
  

            <div class="page-header">
                <h2>{{ $header ?? 'Page' }}</h2>
            </div>
            
            <hr>

            {{ $slot }}
        </main>

        <footer class="footer">
            &copy; {{ date('Y') }} UzminiNu 
        </footer>
    </div>
</body>
</html>
