<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>McALLISTER - {{ $data->title }}</title>

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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">McALLISTER</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Our Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Our People</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Case Studies</a>
                        </li>
                    </ul>
                </div>

                <form class="d-flex mt-4 mt-md-0" action="/" method="get">
                    <div class="row">
                        <label for="image" class="col col-form-label">Colour Scheme</label>
                        <div class="col">
                            <select name="image" class="form-control select-box" autocomplete="off">
                                <option value="999999" {{ $currentImage == '999999' ? 'selected' : '' }}>-- Default Colours --</option>
                                @foreach ($images as $key => $image)
                                    <option value="{{ $key }}" {{ $currentImage == $key ? 'selected' : '' }}>{{ $image->attributes->image }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </nav>

        <div class="white-rounded-bg mt-md-5">
            <main class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="row my-5">
                            <h1>{{ $data->title }}</h1>
                            {!! $data->content[0]->attributes->block[1]->attributes->textarea !!}
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="row" data-masonry='{"percentPosition": true }'>
                            @foreach ($images as $key => $image)
                            <div class="col-sm-6 col-lg-4 mb-4">
                                <div class="card {{ $currentImage == $key ? 'bg-primary p-3' : '' }}">
                                    <img class="bd-placeholder-img card-img img-fluid" src="http://mcallister.cms.avbdev.com/storage/{{ $image->attributes->image }}"/>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <div class="bg-tertiary text-white">
            <div class="container">
                <footer class="row row-cols-auto row-cols-md-5 py-5 mt-5">
                    <div class="col mb-md-0 mb-3">
                        <a href="/" class="d-flex align-items-center mb-3 link-light text-decoration-none">
                            McALLISTER
                        </a>
                        <p class="text-white">© 2021 McAllistar Group</p>
                        <p class="text-white">All Rights Reserved.</p>
                    </div>

                    <div class="col"></div>

                    <div class="col mb-md-0 mb-3">
                        <h5 class="text-primary">Our Services</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-white">Residential</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-white">Commercial</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col mb-md-0 mb-3">
                        <h5 class="text-primary">Company</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-white">Our Services</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-white">Our People</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-white">Corporate & Social Responsibility</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-white">Safe Working</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-white">News</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-white">Supporting the Community</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-white">Case Studies</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-white">Careers</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col mb-md-0 mb-3">
                        <h5 class="text-primary">Contact Us</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2">
                                Northern Ireland:
                                <a href="tel:442930263067" class="nav-link p-0 text-white">+44 (0)2930263067</a>
                            </li>
                            <li class="nav-item mb-2">
                                England:
                                <a href="tel:442930263067" class="nav-link p-0 text-white">+44 (0)1753376884</a>
                            </li>
                            <li class="nav-item mb-2">
                                Republic of Ireland:
                                <a href="tel:35312300003" class="nav-link p-0 text-white">+353 12300003</a>
                            </li>
                        </ul>
                    </div>
                </footer>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
        <script>
        $(document).on('change', 'select.select-box', function (e) {
            $(this).closest('form').submit();
        });
        </script>
    </body>
</html>
