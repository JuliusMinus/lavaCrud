<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Crud-laravel-Vue-Mysql</title>
        <link href="{{ asset('sass/app.scss') }} ref="stylesheet">
        <script type="module"
 scr="{{ asset('js/app.js') }}" defer></script>


 @vite('resources/sass/app.scss')
    </head>
    <body>
        <div id="app"></div>

        @vite('resources/js/app.js')
    </body>
</html>
