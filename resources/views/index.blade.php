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
                --primary-color: {{ $colors[0] }};
                --secondary-color: {{ $colors[1] }};
                --tertiary-color: {{ $colors[2] }};
                --quartiary-color: {{ $colors[3] }};
                --quintary-color: {{ $colors[4] }};
            }
            @import url("https://use.typekit.net/thw4xsv.css");
            body {
                font-family: roc-grotesk, sans-serif;
                font-weight: 300;
                font-style: normal;
                color:  var(--tertiary-color);
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

        <div style="margin: 30px">
        {{ $currentImage }}
            @foreach ($colors as $color)
                <p style="color: white; background: {{ $color }}">Color: {{ $color }}</p>
            @endforeach
        </div>

        <div class="">
            <form action="/" method="get">
                <select name="image" class="select-box" autocomplete="off">
                    <option value="none" {{ $currentImage == 'none' ? 'selected' : '' }}>-- Default Colours --</option>
                    @foreach ($images as $key => $image)
                        <option value="{{ $key }}" {{ $currentImage == $key ? 'selected' : '' }}>{{ $image->attributes->image }}</option>
                    @endforeach
                </select>
            </form>
        </div>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
        $(document).on('change', 'select.select-box', function (e) {
            $(this).closest('form').submit();
        });
        </script>
    </body>
</html>
