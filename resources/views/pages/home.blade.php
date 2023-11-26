@extends("layouts.app")

@section("content")

    <section class="home_banner_area">
        <div class="container box_1620">
            <div class="banner_inner d-flex align-items-center">
                <div class="banner_content">
                    <div class="media">
                        <div class="d-flex">
                            <img class="rounded" src="{{ asset('img') }}/photo.jpg" width="668px" height="690" alt="">
                        </div>
                        <div class="media-body">
                            <div class="personal_text">
                                <h6>Hello Everybody, i am</h6>
                                <h3>Iqbal Mahdi</h3>
                                <h4>Junior Web Developer</h4>
                                <p>You will begin to realise why this exercise is called the Dickens Pattern (with reference to the ghost showing Scrooge some different futures)</p>
                                <ul class="list basic_info">
                                    <li><span><i class="lnr lnr-calendar-full"></i> 27th August, 1994</span></li>
                                    <li><span><i class="lnr lnr-phone-handset"></i> (+880) 195 906 9094</span></li>
                                    <li><span><i class="lnr lnr-envelope"></i> mahdiiqbal37@gmail.com</span></li>
                                    <li><span><i class="lnr lnr-home"></i> Rajshahi City, Rajshahi, Bangladesh</span></li>
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
        </div>
    </section>


    @include("components.about")


    <section class="mytabs_area p_120">
        <div class="container">
            <div class="tabs_inner">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">My Experiences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">My Education</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <ul class="list">
                            <li>
                                <span></span>
                                <div class="media">
                                    <div class="d-flex">
                                        <p>August 2022 to present</p>
                                    </div>
                                    <div class="media-body">
                                        <h4>UpWork</h4>
                                        <p>Web Scripting & Automation Expert</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span></span>
                                <div class="media">
                                    <div class="d-flex">
                                        <p>August 2022 to present</p>
                                    </div>
                                    <div class="media-body">
                                        <h4>UpWork</h4>
                                        <p>Web Scripting & Automation Expert</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span></span>
                                <div class="media">
                                    <div class="d-flex">
                                        <p>August 2022 to present</p>
                                    </div>
                                    <div class="media-body">
                                        <h4>UpWork</h4>
                                        <p>Web Scripting & Automation Expert</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <ul class="list">
                            <li>
                                <span></span>
                                <div class="media">
                                    <div class="d-flex">
                                        <p>Jan 2006 to Mar 2011</p>
                                    </div>
                                    <div class="media-body">
                                        <h4>Rajshahi Model School & College</h4>
                                        <p>Secondary School<br>Certificate</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span></span>
                                <div class="media">
                                    <div class="d-flex">
                                        <p>Jun 2011 to May 2013</p>
                                    </div>
                                    <div class="media-body">
                                        <h4>Rajshahi Govt. City College</h4>
                                        <p>Higher Secondary<br>Certificate</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span></span>
                                <div class="media">
                                    <div class="d-flex">
                                        <p>Aug 2023 to Feb 2024</p>
                                    </div>
                                    <div class="media-body">
                                        <h4>OSTAD</h4>
                                        <p>Web Development With<br>PHP & Laravel</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="feature_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>My Pricings</h2>
                <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>
            </div>
            <div class="feature_inner row">
                <div class="col-lg-4 col-md-6">
                    <div class="feature_item">
                        <i class="fa fa-dollar"></i>
                        <h4>Fullstack Development</h4>
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $17 each.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature_item">
                        <i class="fa fa-dollar"></i>
                        <h4>Api Development</h4>
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $17 each.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature_item">
                        <i class="fa fa-dollar"></i>
                        <h4>Backend Development</h4>
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $17 each.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include("components.projects")


    @include("components.testimonial")

@endsection
