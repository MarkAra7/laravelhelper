<html>

    <head>

        <title>{{ $title ?? 'Layout' }}</title>

    </head>

    <body>

        <h1>{{ $header ?? 'Error' }}</h1>

        <hr/>

        {{ $slot }}

    </body>

</html>