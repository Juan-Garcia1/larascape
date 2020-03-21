<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="QXYkTBgwbpHkGiGY4HtQzvvCBm47onsjMAxvXpb3">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="./favicon.ico">
    <!-- normalize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css" />
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    @yield('title')
</head>
<body>
    @if(!Request::is('login') && (!Request::is('dashboard') && !Request::is('dashboard/*')))
            <div class="loader">
                    <div class="title">
                        <p class="title__sub title__sub--white m-0">Larascape</p>
                    </div>
                </div>
<nav class="main-nav">
            <div class="container">
                <div class="nav-flex align-center">
                    <h1 class="main-nav__logo m-0">
                        <a class="main-nav__logo-link" href="/">Larascape</a>
                    </h1>
                    <button class="main-nav__open-nav button">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            id="Capa_1" x="0px" y="0px" viewBox="0 0 53 53" style="enable-background:new 0 0 53 53;"
                            xml:space="preserve" width="25px" height="25px">
                            <g>
                                <g>
                                    <path d="M2,13.5h49c1.104,0,2-0.896,2-2s-0.896-2-2-2H2c-1.104,0-2,0.896-2,2S0.896,13.5,2,13.5z"
                                        fill="#c0c0c0" />
                                    <path d="M2,28.5h49c1.104,0,2-0.896,2-2s-0.896-2-2-2H2c-1.104,0-2,0.896-2,2S0.896,28.5,2,28.5z"
                                        fill="#c0c0c0" />
                                    <path d="M2,43.5h49c1.104,0,2-0.896,2-2s-0.896-2-2-2H2c-1.104,0-2,0.896-2,2S0.896,43.5,2,43.5z"
                                        fill="#c0c0c0" />
                                </g>
                            </g>
                        </svg>
                    </button>
                    <ul class="main-nav__links main-nav--side-nav list-none m-0 p-0">
                        <button class="main-nav__close-nav button">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                id="Capa_1" x="0px" y="0px" viewBox="0 0 47.971 47.971" style="enable-background:new 0 0 47.971 47.971;"
                                xml:space="preserve" width="20px" height="20px">
                                <g>
                                    <path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88   c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242   C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879   s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"
                                        fill="#c0c0c0" />
                                </g>
                            </svg>

                        </button>
                        <div class="main-nav__wrapper">
                            <li class="main-nav__links__item">
                                <a class="link {{Request::is('/') ? 'link-active' : ''}} link--secondary text-uppercase" href="/">home</a>
                            </li>
                            <!-- <li class="main-nav__links__item">
                                <a class="link link--secondary text-uppercase" href="reservations.html">reservations</a>
                            </li> -->
                            <li class="main-nav__links__item">
                                <a class="link {{Request::is('menu') ? 'link-active' : ''}} link--secondary text-uppercase" href="/menu">menu</a>
                            </li>
                            <!-- <li class="main-nav__links__item">
                                <a class="link link--secondary text-uppercase" href="blog.html">blog</a>
                            </li> -->
                            <li class="main-nav__links__item">
                                <a class="link {{Request::is('contact') ? 'link-active' : ''}} link--secondary text-uppercase" href="/contact">contact</a>
                            </li>
                            @if (Auth::check())
                                <li class="main-nav__links__item">
                                    <a class="link link--secondary text-uppercase"  href="/dashboard">Dashboard</a>
                                </li>
                            @endif
                        </div>
                    </ul>
                </div>
                <!--row end-->
            </div>
            <!--container end-->
        </nav>
            @endif

@yield ('content')

@if(!Request::is('login') && (!Request::is('dashboard') && !Request::is('dashboard/*')))
<footer>
        <div class="container">
            <div class="row white-text">
                <div class="col">
                    <p class="text-uppercase">
                        <b>Locations</b>
                    </p>
                    <div class="row">
                        <div class="col">
                            <p>376 Van Brun St</p>
                            <p>Brooklyn, NY — 11231</p>
                        </div>
                        <!--col end-->
                        <div class="col">
                            <p>25 Union Square West</p>
                            <p>New York, NY — 10003</p>
                        </div>
                        <!--col end-->
                    </div>
                    <!--row end-->
                </div>
                <!--col end-->

                <div class="col">
                    <p class="text-uppercase">
                        <b>Hours</b>
                    </p>
                    <div class="row">
                        <div class="col">
                            <p>Monday - Thursday</p>
                            <p>5:30pm - 10:00pm</p>
                        </div>
                        <!--col end-->
                        <div class="col">
                            <p>Friday &amp; Saturday</p>
                            <p>5:30pm - 11:00pm</p>
                        </div>
                        <!--col end-->
                        <div class="col">
                            <p>Available for private</p>
                            <p>events on Sunday</p>
                        </div>
                        <!--col end-->
                    </div>
                    <!--row end-->
                </div>
                <!--col-6 end-->
            </div>
            <!--row end-->
            <br>
            <br>
            <div class="white-text text-center">Icons made by
                <a class="link link--secondary" href="https://www.flaticon.com/authors/chanut" title="Chanut">Chanut</a>
                from
                <a class="link link--secondary" href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a>
                is licensed by
                <a class="link link--secondary" href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0"
                    target="_blank">CC 3.0 BY</a>
            </div>
        </div>
        <!--container end-->
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/ScrollMagic.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/plugins/debug.addIndicators.min.js"></script>
<script src="{{mix('/js/app.js')}}"></script>
@endif
</body>

</html>