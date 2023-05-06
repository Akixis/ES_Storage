<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ES</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>ES_Storage</h1>
        <div class='sheets'>
            @foreach ($sheets as $sheet)
                <div class='sheet'>
                    <h2 class='title'>{{ $sheet->title }}</h2>
                </div>
            @endforeach
        </div>
    </body>
</html>