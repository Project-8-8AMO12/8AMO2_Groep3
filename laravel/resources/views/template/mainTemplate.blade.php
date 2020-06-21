<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME', 'ImkersLeiden') }}</title>

    <link href="/css/app.css" rel="stylesheet">
</head>

<body>

<div class="d-none d-lg-block">
    <div class="navigation">
        <div class="container">
            <nav class="navbar navbar-expand-lg navigation">
                <a class="navbar-brand navbar-brand--desktop py-0 d-flex" href="{{ route('home') }}"><img src="/logo.png" alt="logo" class="h-100"></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link pl-0 py-0 mr-2" href="/">Activiteiten</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link pl-0 py-0 mr-2" href="/">Cursussen</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link pl-0 py-0 mr-2" href="{{ route('vereniging') }}">De vereniging</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link pl-0 py-0 mr-2" href="/">Zwerm gezien?</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link pl-0 py-0" href="/">Lid worden</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="navigation">
        <div class="container">
            <div class="navbar navbar-expand-lg navigation">
                <div class="collapse navbar-collapse" id="basicExampleNav">
                    <ul class="navbar-nav w-100">
                        <li class="nav-item mx-auto">
                            <a class="nav-link pl-0 py-0" href="/">Agenda</a>
                        </li>

                        <li class="nav-item mx-auto">
                            <a class="nav-link py-0" href="/">Nieuws</a>
                        </li>

                        <li class="nav-item mx-auto">
                            <a class="nav-link py-0" href="/">De beienstal</a>
                        </li>

                        <li class="nav-item mx-auto">
                            <a class="nav-link py-0" href="/">De winkel</a>
                        </li>

                        <li class="nav-item mx-auto">
                            <a class="nav-link py-0" href="/">De stertselaar</a>
                        </li>

                        <li class="nav-item mx-auto">
                            <a class="nav-link py-0" href="/">Foto's</a>
                        </li>

                        <li class="nav-item mx-auto">
                            <a class="nav-link py-0" href="/">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="d-block d-lg-none">
    <nav class="navbar navbar-expand-lg navigation">
        <!-- Navbar brand -->
        <div>
            <a class="navbar-brand navbar-brand--mobile d-flex py-0" href="{{ route('home') }}"><img src="/logo_small.png" alt="logo" class="h-100"></a>
        </div>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" onclick="showMobileNavigation()">
            <span class="navbar-toggler-icon navigation-hamburger-mobile"></span>
        </button>

        <div id="mobileNav" class="navigation-mobile-overlay">

            <div class="row h-100">
                <div class="col-2 navigation-mobile-overlay--sidebar pr-0 d-flex">
                    <a onclick="hideMobileNavigation()" class="mx-auto navigation-mobile-overlay--sidebar-button">&times;</a>
                </div>

                <div class="col-10 my-auto">
                    <div class="row">
                        <div class="col d-flex">
                            <img src="/logo_small.png" alt="logo" class="mx-auto mb-5">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="pl-3">

                                <div class="row mb-2 p-2 navigation-mobile-overlay--navigation-item">
                                    <div class="col px-0 d-flex">
                                        <a href="/" class="h1 mb-0 w-100">Activiteiten</a>
                                    </div>
                                </div>

                                <div class="row mb-2 p-2 navigation-mobile-overlay--navigation-item">
                                    <div class="col px-0 d-flex">
                                        <a href="/" class="h1 mb-0 w-100">Cursussen</a>
                                    </div>
                                </div>

                                <div class="row mb-2 p-2 navigation-mobile-overlay--navigation-item">
                                    <div class="col px-0 d-flex">
                                        <a href="{{ route('vereniging') }}" class="h1 mb-0 w-100">De vereniging</a>
                                    </div>
                                </div>

                                <div class="row mb-2 p-2 navigation-mobile-overlay--navigation-item">
                                    <div class="col px-0 d-flex">
                                        <a href="/" class="h1 mb-0 w-100">Zwerm gezien?</a>
                                    </div>
                                </div>

                                <div class="row mb-4 p-2 navigation-mobile-overlay--navigation-item">
                                    <div class="col px-0 d-flex">
                                        <a href="/" class="h1 mb-0 w-100">Lid worden</a>
                                    </div>
                                </div>


                                <div class="row mb-2 p-2 navigation-mobile-overlay--navigation-item">
                                    <div class="col px-0 d-flex">
                                        <a href="/" class="h1 mb-0 w-100">Agenda</a>
                                    </div>
                                </div>

                                <div class="row mb-2 p-2 navigation-mobile-overlay--navigation-item">
                                    <div class="col px-0 d-flex">
                                        <a href="/" class="h1 mb-0 w-100">Nieuws</a>
                                    </div>
                                </div>

                                <div class="row mb-2 p-2 navigation-mobile-overlay--navigation-item">
                                    <div class="col px-0 d-flex">
                                        <a href="/" class="h1 mb-0 w-100">De beienstal</a>
                                    </div>
                                </div>

                                <div class="row mb-2 p-2 navigation-mobile-overlay--navigation-item">
                                    <div class="col px-0 d-flex">
                                        <a href="/" class="h1 mb-0 w-100">De winkel</a>
                                    </div>
                                </div>

                                <div class="row mb-2 p-2 navigation-mobile-overlay--navigation-item">
                                    <div class="col px-0 d-flex">
                                        <a href="/" class="h1 mb-0 w-100">De stertselaar</a>
                                    </div>
                                </div>

                                <div class="row mb-2 p-2 navigation-mobile-overlay--navigation-item">
                                    <div class="col px-0 d-flex">
                                        <a href="/" class="h1 mb-0 w-100">Foto's</a>
                                    </div>
                                </div>

                                <div class="row mb-2 p-2 navigation-mobile-overlay--navigation-item">
                                    <div class="col px-0 d-flex">
                                        <a href="/" class="h1 mb-0 w-100">Contact</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

<div class="container px-5 mb-4" id="app">
    @yield('content')
</div>

<script src="/js/app.js"></script>

</body>
</html>
