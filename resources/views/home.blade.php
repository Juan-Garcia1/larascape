@extends('layout')

@section('title')
    <title>Larascape</title>
@endsection

@section('content')
<header class="hero home-img trigger-1">
        
        <div class="hero__wrapper">
            <div class="title">
                <p class="title__main mb-0 js-slide-down">Welcome</p>
                <h2 class="title__sub title__sub--white js-zoom-out">larascape</h2>
            </div>
            <span class="symbol js-spin">
                <span></span>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                    x="0px" y="0px" width="10px" height="10px" viewBox="0 0 24.748 24.748" style="enable-background:new 0 0 24.748 24.748;"
                    xml:space="preserve">
                    <g>
                        <path d="M23.091,18.561c-0.37,0.644-1.042,1-1.734,1c-0.339,0-0.683-0.086-0.998-0.268l-5.982-3.455v6.91c0,1.104-0.896,2-2,2   c-1.104,0-2-0.896-2-2v-6.911l-5.985,3.456c-0.315,0.182-0.659,0.268-0.998,0.268c-0.691,0-1.364-0.356-1.734-1   c-0.552-0.957-0.225-2.18,0.732-2.73l5.983-3.456L2.39,8.919C1.433,8.366,1.106,7.145,1.658,6.188   C2.21,5.231,3.434,4.903,4.39,5.456l5.984,3.455V2c0-1.104,0.896-2,2-2c1.104,0,2,0.896,2,2v6.91l5.982-3.455   c0.956-0.553,2.183-0.225,2.732,0.732c0.552,0.957,0.225,2.18-0.732,2.731l-5.981,3.456l5.982,3.455   C23.314,16.381,23.643,17.604,23.091,18.561z"
                            fill="#be8040" />
                    </g>
                </svg>
                <span></span>
            </span>
            <p class="tagline js-fade-in">ready to be opened</p>
        </div>
    </header>

    <main>

        <section class="trigger-2">

            <div class="container">
                <div class="row">

                    <div class="col text-center">
                        <div class="title">
                            <p class="title__main mb-0">Discover</p>
                            <h2 class="title__sub title__sub--black">our story</h2>
                        </div>
                        <!--title end-->
                        <span class="section__title-symbol">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" id="Capa_1" x="0px" y="0px" width="10px" height="10px" viewBox="0 0 24.748 24.748"
                                    style="enable-background:new 0 0 24.748 24.748;" xml:space="preserve">
                                    <g>
                                        <path d="M23.091,18.561c-0.37,0.644-1.042,1-1.734,1c-0.339,0-0.683-0.086-0.998-0.268l-5.982-3.455v6.91c0,1.104-0.896,2-2,2   c-1.104,0-2-0.896-2-2v-6.911l-5.985,3.456c-0.315,0.182-0.659,0.268-0.998,0.268c-0.691,0-1.364-0.356-1.734-1   c-0.552-0.957-0.225-2.18,0.732-2.73l5.983-3.456L2.39,8.919C1.433,8.366,1.106,7.145,1.658,6.188   C2.21,5.231,3.434,4.903,4.39,5.456l5.984,3.455V2c0-1.104,0.896-2,2-2c1.104,0,2,0.896,2,2v6.91l5.982-3.455   c0.956-0.553,2.183-0.225,2.732,0.732c0.552,0.957,0.225,2.18-0.732,2.731l-5.981,3.456l5.982,3.455   C23.314,16.381,23.643,17.604,23.091,18.561z"
                                            fill="#606060" />
                                    </g>
                                </svg>
                            </span>
                        <p class="section__paragraph pl-5 pr-5">Larascape is a restaurant, bar and coffee roastery located
                            on a busy corner site in Farringdon’s Exmouth
                            Market. With glazed frontage on two sides of the building, overlooking the market and a
                            bustling
                            London intersection.</p>
                        <!-- <a href="#" class="link link--primary text-uppercase sm-text">about us</a> -->
                        <br>
                        <br>
                    </div>
                    <!--col end-->
                    <div class="col">
                        <div class="side-by-side text-center pl-5 pr-5 pt-5 pb-5">
                            <div class="col ml-2 mr-2">
                                <img class="img-fluid js-fade-down" src="/images/discover-our-story-img1.jpg">
                            </div>
                            <div class="col ml-2 mr-2">
                                <img class="img-fluid js-fade-up" src="/images/discover-our-story-img2.jpg" alt="bacon">
                            </div>
                        </div>
                    </div>

                </div>
                <!--row end-->

            </div>
            <!--container end-->

        </section>

        <section class="bread-bck trigger-4">
            <div class="container">

                <div class="title text-center">
                    <p class="title__main mb-0 js-fade-up">Tasteful</p>
                    <h2 class="title__sub title__sub--white js-fade-up">recipies</h2>
                </div>
                <!--title end-->

            </div>
            <!--container end-->
        </section>

        <section class="trigger-3">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="gallery">
                            <img class="img-fluid js-fade-left" src="/images/discover-menu-img1.jpg">
                            <img class="img-fluid js-fade-down" src="/images/discover-menu-img2.jpg">
                            <img class="img-fluid js-fade-up" src="/images/discover-menu-img3.jpg">
                            <img class="img-fluid js-fade-right" src="/images/discover-menu-img4.jpg">
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="title">
                            <p class="title__main mb-0">Discover</p>
                            <h2 class="title__sub title__sub--black">menu</h2>
                        </div>
                        <!--title end-->
                        <span class="section__title-symbol">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" id="Capa_1" x="0px" y="0px" width="10px" height="10px" viewBox="0 0 24.748 24.748"
                                    style="enable-background:new 0 0 24.748 24.748;" xml:space="preserve">
                                    <g>
                                        <path d="M23.091,18.561c-0.37,0.644-1.042,1-1.734,1c-0.339,0-0.683-0.086-0.998-0.268l-5.982-3.455v6.91c0,1.104-0.896,2-2,2   c-1.104,0-2-0.896-2-2v-6.911l-5.985,3.456c-0.315,0.182-0.659,0.268-0.998,0.268c-0.691,0-1.364-0.356-1.734-1   c-0.552-0.957-0.225-2.18,0.732-2.73l5.983-3.456L2.39,8.919C1.433,8.366,1.106,7.145,1.658,6.188   C2.21,5.231,3.434,4.903,4.39,5.456l5.984,3.455V2c0-1.104,0.896-2,2-2c1.104,0,2,0.896,2,2v6.91l5.982-3.455   c0.956-0.553,2.183-0.225,2.732,0.732c0.552,0.957,0.225,2.18-0.732,2.731l-5.981,3.456l5.982,3.455   C23.314,16.381,23.643,17.604,23.091,18.561z"
                                            fill="#606060" />
                                    </g>
                                </svg>
                            </span>
                        <p class="section__paragraph pl-5 pr-5">For those with pure food indulgence in mind, come next
                            door and sate your desires with our ever changing
                            internationally and seasonally inspired small plates. We love food, lots of different food,
                            just
                            like you.</p>
                        <a href="/menu" class="link link--primary text-uppercase sm-text">view full menu</a>
                    </div>
                    <!--col end-->

                </div>
                <!--row end-->
            </div>
            <!--container end-->
        </section>

        <section class="dessert-bck trigger-4">
            <div class="container">

                <div class="title text-center">
                    <p class="title__main mb-0 js-fade-up">The Perfect</p>
                    <h2 class="title__sub title__sub--white js-fade-up">blend</h2>
                </div>
                <!--title end-->

            </div>
            <!--container end-->
        </section>

        <section class="trigger-2">
            <div class="container">
                <div class="row">

                    <div class="col text-center">
                        <div class="title">
                            <p class="title__main mb-0">Culinary</p>
                            <h2 class="title__sub title__sub--black">delight</h2>
                        </div>
                        <!--title end-->
                        <span class="section__title-symbol">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" id="Capa_1" x="0px" y="0px" width="10px" height="10px" viewBox="0 0 24.748 24.748"
                                    style="enable-background:new 0 0 24.748 24.748;" xml:space="preserve">
                                    <g>
                                        <path d="M23.091,18.561c-0.37,0.644-1.042,1-1.734,1c-0.339,0-0.683-0.086-0.998-0.268l-5.982-3.455v6.91c0,1.104-0.896,2-2,2   c-1.104,0-2-0.896-2-2v-6.911l-5.985,3.456c-0.315,0.182-0.659,0.268-0.998,0.268c-0.691,0-1.364-0.356-1.734-1   c-0.552-0.957-0.225-2.18,0.732-2.73l5.983-3.456L2.39,8.919C1.433,8.366,1.106,7.145,1.658,6.188   C2.21,5.231,3.434,4.903,4.39,5.456l5.984,3.455V2c0-1.104,0.896-2,2-2c1.104,0,2,0.896,2,2v6.91l5.982-3.455   c0.956-0.553,2.183-0.225,2.732,0.732c0.552,0.957,0.225,2.18-0.732,2.731l-5.981,3.456l5.982,3.455   C23.314,16.381,23.643,17.604,23.091,18.561z"
                                            fill="#606060" />
                                    </g>
                                </svg>
                            </span>
                        <p class="section__paragraph pl-5 pr-5">We promise an intimate and relaxed dining experience
                            that offers something different to local and
                            foreign patrons and ensures you enjoy a memorable food experience every time.</p>
                        <!-- <a href="reservations.html" class="link link--primary text-uppercase sm-text">make a
                            reservation</a> -->
                        <br>
                        <br>
                    </div>
                    <!--col end-->

                    <div class="col">
                        <div class="side-by-side text-center pl-5 pr-5 pt-5 pb-5">
                            <div class="col ml-2 mr-2">
                                <img class="img-fluid js-fade-down" src="/images/culinary-delight-img1.jpg">
                            </div>
                            <div class="col ml-2 mr-2">
                                <img class="img-fluid js-fade-up" src="/images/culinary-delight-img2.jpg" alt="bacon">
                            </div>
                        </div>
                    </div>
                    <!--col end-->

                </div>
                <!--row end-->
            </div>
            <!--container end-->
        </section>

    </main>
@endsection