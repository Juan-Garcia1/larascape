@extends('layout')

@section('title')
    <title>Larascape | Contact</title>
@endsection

@section('content')
<header class="hero hero--contact contact-img trigger-4">
        <div class="hero__wrapper">
            <div class="title">
                <p class="title__main m-0 js-fade-up">Find Us</p>
                <h2 class="title__sub title__sub--white js-fade-up">contact</h2>
            </div>
        </div>
    </header>

    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-uppercase">get in touch</h2>
                        <p class="section__paragraph">Larascape’s restaurant and bar are located on the ground and first
                            floor within the Winchester Grade
                            VI listed building of the Royal Institution of Chartered Surveyors. The restaurant and bar
                            both
                            have their own entrances.</p>
                        <p class="section__paragraph">If you have questions or comments, please get a hold of us in
                            whichever way is most convenient. Ask
                            away. There is no reasonable question that our team can not answer.</p>
                        <br>
                        <h2 class="text-uppercase">follow us</h2>
                        <br>
                        <a class="link social-links" href="#">f</a>
                        <a class="link social-links" href="#">t</a>
                        <br>
                        <br>
                    </div>
                    <!--col end-->
                    <div class="col">
                        <form>
                            <label for="name">
                                <p>Your Name (required)</p>
                                <input id="name" type="text">
                            </label>
                            <label for="email">
                                <p>Your Email (required)</p>
                                <input id="email" type="text">
                            </label>
                            <label for="subject">
                                <p>Subject</p>
                                <input id="subject" type="text">
                            </label>
                            <label for="message">
                                <p>Your Message</p>
                                <textarea id="message" cols="30" rows="10"></textarea>
                            </label>
                            <br>
                            <br>
                            <input class="text-uppercase" type="submit" value="send">
                        </form>
                    </div>
                    <!--col end-->
                </div>
                <!--row end-->
            </div>
            <!--container-->
        </section>
    </main>

@endsection