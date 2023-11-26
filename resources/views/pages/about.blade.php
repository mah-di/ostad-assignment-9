@extends("layouts.app")

@section("content")


    <section class="banner_area">
        <div class="box_1620">
            <div class="banner_inner d-flex align-items-center">
                <div class="container">
                    <div class="banner_content text-center">
                        <h2>About Me</h2>
                        <div class="page_link">
                            <a href="{{ route('home') }}">Home</a>
                            <a href="{{ route('about') }}">About Me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="profile_area">
        <div class="container">
            <div class="profile_inner p_120">
                <div class="row">
                    <div class="col-lg-5">
                        <img class="img-fluid rounded" src="{{ asset('img') }}/photo.jpg" alt="">
                    </div>
                    <div class="col-lg-7">
                        <div class="personal_text">
                            <h6>Hello Everybody, i am</h6>
                            <h3>Iqbal Mahdi</h3>
                            <h4>Junior Web Developer</h4>
                            <p>You will begin to realise why this exercise is called the Dickens Pattern (with reference to the ghost showing Scrooge some different futures)</p>
                            <ul class="list basic_info">
                                <li><a href="#"><i class="lnr lnr-calendar-full"></i> 27th August, 1994</a></li>
                                <li><a href="#"><i class="lnr lnr-phone-handset"></i> (+880) 195 906 9094</a></li>
                                <li><a href="#"><i class="lnr lnr-envelope"></i> mahdiiqbal37@gmail.com</a></li>
                                <li><a href="#"><i class="lnr lnr-home"></i> Rajshahi City, Rajshahi, Bangladesh</a></li>
                            </ul>
                            <ul class="list personal_social">
                                <li><a href="https://www.facebook.com/mahdi.iqbal2"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://github.com/mah-di"><i class="fa fa-github"></i></a></li>
                                <li><a href="https://www.instagram.com/m7qube/"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include("components.about")


    @include("components.testimonial")


@endsection
