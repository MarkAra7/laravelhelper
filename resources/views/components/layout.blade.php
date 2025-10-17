<html>

    <head>

        <title>{{ $title ?? 'Layout' }}</title>

    </head>

    <body>
        <div>

        <x-navigation />

        </div>


            @if (session('status'))

                <div style="color:green" class="alert alert-success">

                    {{ session('status') }}

                </div>
            
                
            @endif
        <h1>{{ $header ?? 'Error' }}</h1>

        <hr/>

        {{ $slot }}

    </body>

</html>