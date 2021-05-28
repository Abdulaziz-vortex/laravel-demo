<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title>@yield('title')</title>

        @yield('styles')
        <!-- header section -->
        <header class="p-3 bg-dark text-white">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    Logo here
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="{{ route('homepage') }}" class="nav-link px-2 text-secondary">Home</a></li>
                    <li><a href="{{ route('news') }}" class="nav-link px-2 text-white">News</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Photos</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Blogs</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Contacts</a></li>
                    </ul>

                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                    </form>

                    <div class="text-end">
                    <button type="button" class="btn btn-outline-light me-2">Login</button>
                    <button type="button" class="btn btn-warning">Sign-up</button>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')


        <!-- for scripts -->
        @yield('js-scripts')
    </head>
    <body>

    </body>
</html>
