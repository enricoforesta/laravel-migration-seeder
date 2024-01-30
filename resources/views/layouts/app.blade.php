<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- assets con vite --}}
    @vite('resources/js/app.js')
    {{-- assets con vite --}}
    <title>Train Station</title>
</head>

<body>
    <h1 class="text-center text-uppercase p-3">Trains Station</h1>

    <ul>
        @foreach ($trains as $train)
            <li class="my-4">
                <h2>Compagnia: {{ $train['company'] }}</h2>
                <h3>Stazione partenza: {{ $train['departure_station'] }} - Stazione arrivo:
                    {{ $train['arrival_station'] }}</h3>
                <h4>Orario partenza: {{ $train['departure_time'] }} - Orario arrivo:
                    {{ $train['arrival_time'] }}</h4>
                @if ($train['on_time'])
                    <h4>Treno in orario</h4>
                @endif
            </li>
        @endforeach

    </ul>
</body>
