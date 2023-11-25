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


    <section class="welcome_area p_120">
        <div class="container">
            <div class="row welcome_inner">
                <div class="col-lg-6">
                    <div class="welcome_text">
                        <h4>About Myself</h4>
                        <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.</p>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="wel_item">
                                    <i class="lnr lnr-database"></i>
                                    <h4>$2.5M</h4>
                                    <p>Total Donation</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="wel_item">
                                    <i class="lnr lnr-book"></i>
                                    <h4>1465</h4>
                                    <p>Total Projects</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="wel_item">
                                    <i class="lnr lnr-users"></i>
                                    <h4>3965</h4>
                                    <p>Total Volunteers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tools_expert">
                        <div class="skill_main">
                            <div class="skill_item">
                                <h4>HTML <span class="counter">90</span>%</h4>
                                <div class="progress_br">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4>CSS <span class="counter">75</span>%</h4>
                                <div class="progress_br">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4>JavaScript <span class="counter">75</span>%</h4>
                                <div class="progress_br">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4>PHP <span class="counter">70</span>%</h4>
                                <div class="progress_br">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4>Laravel <span class="counter">75</span>%</h4>
                                <div class="progress_br">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="testimonials_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>Testimonials</h2>
                <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>
            </div>
            <div class="testi_inner">
                <div class="testi_slider owl-carousel owl-loaded owl-drag">



                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1950px, 0px, 0px); transition: all 1.5s ease 0s; width: 3510px;"><div class="owl-item cloned" style="width: 360px; margin-right: 30px;"><div class="item">
                        <div class="testi_item">
                            <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face</p>
                            <h4>Fanny Spencer</h4>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                        </div></div><div class="owl-item cloned" style="width: 360px; margin-right: 30px;"><div class="item">
                            <div class="testi_item">
                                <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face</p>
                                <h4>Fanny Spencer</h4>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div></div><div class="owl-item cloned" style="width: 360px; margin-right: 30px;"><div class="item">
                            <div class="testi_item">
                                <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face</p>
                                <h4>Fanny Spencer</h4>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div></div><div class="owl-item" style="width: 360px; margin-right: 30px;"><div class="item">
                            <div class="testi_item">
                                <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face</p>
                                <h4>Fanny Spencer</h4>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div></div><div class="owl-item" style="width: 360px; margin-right: 30px;"><div class="item">
                            <div class="testi_item">
                                <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face</p>
                                <h4>Fanny Spencer</h4>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div></div><div class="owl-item active" style="width: 360px; margin-right: 30px;"><div class="item">
                            <div class="testi_item">
                                <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face</p>
                                <h4>Fanny Spencer</h4>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div></div><div class="owl-item cloned active" style="width: 360px; margin-right: 30px;"><div class="item">
                            <div class="testi_item">
                                <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face</p>
                                <h4>Fanny Spencer</h4>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div></div><div class="owl-item cloned active" style="width: 360px; margin-right: 30px;"><div class="item">
                            <div class="testi_item">
                                <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face</p>
                                <h4>Fanny Spencer</h4>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div></div><div class="owl-item cloned" style="width: 360px; margin-right: 30px;"><div class="item">
                            <div class="testi_item">
                                <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face</p>
                                <h4>Fanny Spencer</h4>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div></div></div>
                    </div><div class="owl-nav disabled"><div class="owl-prev">prev</div><div class="owl-next">next</div></div><div class="owl-dots disabled"><div class="owl-dot active"><span></span></div></div>
                </div>
            </div>
        </div>
    </section>


@endsection
