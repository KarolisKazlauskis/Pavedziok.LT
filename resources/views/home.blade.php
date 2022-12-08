<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Styles -->
        <link href="{{ asset('assets/css/home.css') }}" rel="stylesheet">
        <title>Pavedžiok.LT</title>
    </head>
    <body>
        <nav class="navigationWrapper">
            <div class="logoWrapper">
                <span class="pavedziok">Pavedžiok</span>
                <span class="lt">.LT</span>
            </div>
            <ul class="navigation">
                <li class="parent"><a class="link" href="#">Pradžia</a></li>
                <li class="parent"><a class="link" href="#">Apie</a></li>
                <li class="parent"><a class="link" href="#">Nariai</a></li>
                <li class="parent"><a class="link" href="#">Kontaktai</a></li>
            </ul>
        </nav>
    </body>
</html>
