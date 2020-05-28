<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/css/app.css">

        <title>{{env('APP_NAME')}}</title>
    </head>

    <body>
        <div class="d-none d-lg-block">
            <div class="dark-color-1">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-dark">
                        <a class="navbar-brand navbar-brand--desktop py-0 d-flex" href="/"><img src="/logo.png" alt="logo" class="h-100"></a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <ul class="navbar-nav ml-auto">

                        </ul>
                    </nav>
                </div>
            </div>

            <div class="dark-color-3">
                <div class="container">
                    <div class="navbar navbar-expand-lg navbar-dark dark-color-3">
                        <div class="collapse navbar-collapse" id="basicExampleNav">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link pl-0 py-0" href="/hentai">Hentai</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link py-0" href="/doujinshi">Doujins</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link py-0" href="/images">Images</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link py-0" href="/eroges">Eroges</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link py-0" href="/random">Random</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link py-0" href="/stats">Stats</a>
                                </li>

                            </ul>

                            <form class="form-inline" action="/search">

                                <div class="form-group d-flex my-0">
                                    <input type="text" name="search" class="dark-color-3 search--input" placeholder="Search" aria-label="Search">
                                    <button class="btn py-0 search--button h-100" type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="my-auto" style="height: 12px; fill: white;">
                                            <path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"/>
                                        </svg>
                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-block d-lg-none">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <!-- Navbar brand -->
                <div>
                    <a class="navbar-brand navbar-brand--mobile d-flex py-0" href="/"><img src="/logo.png" alt="logo" class="h-100"></a>
                </div>

                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" onclick="showMobileNavigation()">
                    <span class="navbar-toggler-icon" style="font-size: 3rem;"></span>
                </button>

                <div id="mobileNav" class="overlay dark-color-3">

                    <div class="row h-100">
                        <div class="col-2 dark-color-2">
                            <a onclick="hideMobileNavigation()" id="closeButton">&times;</a>
                        </div>

                        <div class="col-10 my-auto">
                            <h1 class="text-center mb-5" id="navigation_mobile_title">sharesauce</h1>
                            <a class="h1 mb-4 mt-5">View</a>
                            <div class="row mt-4 pl-3 mb-5">
                                <div class="pl-5 col">
                                    <div class="row col mb-2 p-2 dark-color-2 navigation_mobile_element">
                                        <a href="/hentai" class="h1 w-100">Hentai</a>
                                    </div>

                                    <div class="row col mb-2 p-2 dark-color-2 navigation_mobile_element">
                                        <a href="/doujinshi" class="h1 w-100">Doujinshi</a>
                                    </div>

                                    <div class="row col mb-2 p-2 dark-color-2 navigation_mobile_element">
                                        <a href="/images" class="h1 w-100">Image</a>
                                    </div>

                                    <div class="row col mb-2 p-2 dark-color-2 navigation_mobile_element">
                                        <a href="/eroges" class="h1 w-100">Eroges</a>
                                    </div>

                                    <div class="row col mb-2 p-2 dark-color-2 navigation_mobile_element">
                                        <a href="/random" class="h1 w-100">Random</a>
                                    </div>
                                </div>
                            </div>


                            <a class="h1 mb-4">Other</a>
                            <div class="row mt-4 pl-3 mb-2">
                                <div class="pl-5 col">
                                    <div class="row col mb-2 p-2 dark-color-2 navigation_mobile_element">
                                        <a href="/stats" class="h1 w-100">Stats</a>
                                    </div>

                                    <div class="row col mb-2 p-2 btn-logout navigation_mobile_element">
                                        <a href="/logout" class="h1 w-100">Logout</a>
                                    </div>

                                    <div class="row col mb-2 p-2 navigation_mobile_element">
                                        <form class="col" style="height: 5vh;" action="/search">
                                            <div class="row h-100">
                                                <div class="col-8 p-0">
                                                    <input class="form-control dark-color-2 w-100 h-100" name="search" type="text" placeholder="Search" aria-label="Search">
                                                </div>

                                                <div class="col-4 p-0 pl-1">
                                                    <button class="btn btn-primary w-100 h-100" type="submit">Search</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </body>
</html>