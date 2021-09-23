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
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <style>
            :root {
                --primary-color: {{ $colors[0] }};
                --secondary-color: {{ $colors[1] }};
                --tertiary-color: {{ $colors[2] }};
                --quartiary-color: {{ $colors[3] }};
                --quintary-color: {{ $colors[4] }};
                --bs-primary: {{ $colors[0] }};
                --bs-secondary: {{ $colors[1] }};
            }
        </style>
    </head>

    <body>
        <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-primary text-decoration-none">
                    {{ $data->title }}
                </a>

                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li class="active"><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
                    <li><a href="#" class="nav-link px-2 link-secondary">Features</a></li>
                    <li><a href="#" class="nav-link px-2 link-secondary">Pricing</a></li>
                    <li><a href="#" class="nav-link px-2 link-secondary">FAQs</a></li>
                    <li><a href="#" class="nav-link px-2 link-secondary">About</a></li>
                </ul>

                <div class="col-md-3 text-end">
                    <form action="/" method="get">
                        <div class="row">
                            <label for="image" class="col col-form-label">Colour Scheme</label>
                            <div class="col">
                                <select name="image" class="form-control select-box" autocomplete="off">
                                    <option value="none" {{ $currentImage == 'none' ? 'selected' : '' }}>-- Default Colours --</option>
                                    @foreach ($images as $key => $image)
                                        <option value="{{ $key }}" {{ $currentImage == $key ? 'selected' : '' }}>{{ $image->attributes->image }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </header>
        </div>

        <main class="container">
            <div class="row" data-masonry='{"percentPosition": true }'>
                @foreach ($images as $image)
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card">
                        <img class="bd-placeholder-img card-img img-fluid" src="http://mcallister.cms.avbdev.com/storage/{{ $image->attributes->image }}"/>
                    </div>
                </div>
                @endforeach
            </div>
        </main>

        <div class="bg-primary">
            <div class="container">
                <footer class="row row-cols-5 py-5 mt-5">
                    <div class="col">
                        <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                            {{ $data->title }}
                        </a>
                        <p class="text-muted">© 2021</p>
                    </div>

                    <div class="col"></div>

                    <div class="col">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">Home</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">Features</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">Pricing</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">FAQs</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">About</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">Home</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">Features</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">Pricing</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">FAQs</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">About</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">Home</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">Features</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">Pricing</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">FAQs</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">About</a>
                            </li>
                        </ul>
                    </div>
                </footer>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
        <script>
        $(document).on('change', 'select.select-box', function (e) {
            $(this).closest('form').submit();
        });
        </script>
    </body>
</html>
