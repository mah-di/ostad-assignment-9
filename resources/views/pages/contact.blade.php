@extends("layouts.app")

@section("content")


    <section class="banner_area">
        <div class="box_1620">
            <div class="banner_inner d-flex align-items-center">
                <div class="container">
                    <div class="banner_content text-center">
                        <h2>Contact Me</h2>
                    <div class="page_link">
                        <a href="{{ route('home') }}">Home</a>
                        <a href="{{ route('contact') }}">Contact Me</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact_area p_120">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>Rajshahi, Bangladesh</h6>
                            <p>Rajshahi City</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="#">(+880) 195 906 9094</a></h6>
                            <p>Sun to Thu 9am to 5pm</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="#">mahdiiqbal37@gmail.com</a></h6>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form class="row contact_form" method="post" id="contactForm" novalidate="novalidate" onsubmit="event.preventDefault(); sendMail();">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button id="submit-btn" type="submit" value="submit" class="btn submit_btn">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


@endsection

@push('script')


    <script>
        const sendMail = () => {
            alert("Sending Mail...")
        }
    </script>


@endpush
