<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $data->title }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.typekit.net/thw4xsv.css">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <style>
            :root {
                --primary-color: red;
                --secondary-color: blue;
                --tertiary-color: green;
                --quartiary-color: yellow;
                --quintary-color: purple;
            }
            @import url("https://use.typekit.net/thw4xsv.css");
            body {
                font-family: roc-grotesk, sans-serif;
                font-weight: 300;
                font-style: normal;
            }
        </style>
    </head>

    <body>
        <div class="">
            <span class="">{{ $data->title }}</span>
        </div>

        <div style="display: none;">
            {!! print_r($data->content[0]->attributes->block[2]->attributes->images) !!}
        </div>

        <div class="">
            @foreach ($images as $image)
                <p>This is image {{ $image->attributes->image }}</p>
            @endforeach
        </div>
    </body>
</html>
