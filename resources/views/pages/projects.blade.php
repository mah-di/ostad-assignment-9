@extends("layouts.app")

@section("content")


    <section class="banner_area">
        <div class="box_1620">
            <div class="banner_inner d-flex align-items-center">
                <div class="container">
                    <div class="banner_content text-center">
                        <h2>My Projects</h2>
                        <div class="page_link">
                            <a href="{{ route('home') }}">Home</a>
                            <a href="{{ route('projects') }}">My Projects</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="home_gallery_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>Our Latest Featured Projects</h2>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>
            <div class="isotope_fillter">
            <ul class="gallery_filter list">
                <li class="" data-filter="*"><a href="#">All</a></li>
                <li data-filter=".brand" class=""><a href="#">Vector</a></li>
                <li data-filter=".manipul" class=""><a href="#">Raster</a></li>
                <li data-filter=".creative" class=""><a href="#">UI/UX</a></li>
                <li data-filter=".design" class="active"><a href="#">Printing</a></li>
            </ul>
            </div>
        </div>
        <div class="container">
            <div class="gallery_f_inner row imageGallery1" style="position: relative; height: 360.75px;">
                <div class="col-lg-4 col-md-4 col-sm-6 brand manipul design print" style="position: absolute; left: 0px; top: 0px;">
                    <div class="h_gallery_item">
                        <div class="g_img_item">
                            <img class="img-fluid" src="{{ asset('img') }}/gallery/project-1.jpg" alt="">
                            <a class="light" href="{{ asset('img') }}/gallery/project-1.jpg"><img src="{{ asset('img') }}/gallery/icon.png" alt=""></a>
                        </div>
                        <div class="g_item_text">
                            <h4>3D Helmet Design</h4>
                            <p>Client Project</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 brand manipul creative" style="position: absolute; left: 0px; top: 0px; display: none;">
                    <div class="h_gallery_item">
                        <div class="g_img_item">
                            <img class="img-fluid" src="{{ asset('img') }}/gallery/project-2.jpg" alt="">
                            <a class="light" href="{{ asset('img') }}/gallery/project-2.jpg"><img src="{{ asset('img') }}/gallery/icon.png" alt=""></a>
                        </div>
                        <div class="g_item_text">
                            <h4>2D Vinyl Design</h4>
                            <p>Client Project</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 manipul creative design print" style="position: absolute; left: 240px; top: 0px;">
                    <div class="h_gallery_item">
                        <div class="g_img_item">
                            <img class="img-fluid" src="{{ asset('img') }}/gallery/project-3.jpg" alt="">
                            <a class="light" href="{{ asset('img') }}/gallery/project-3.jpg"><img src="{{ asset('img') }}/gallery/icon.png" alt=""></a>
                        </div>
                        <div class="g_item_text">
                            <h4>Creative Poster Design</h4>
                            <p>Client Project</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 brand creative print" style="position: absolute; left: 480px; top: 0px; display: none;">
                    <div class="h_gallery_item">
                        <div class="g_img_item">
                            <img class="img-fluid" src="{{ asset('img') }}/gallery/project-4.jpg" alt="">
                            <a class="light" href="{{ asset('img') }}/gallery/project-4.jpg"><img src="{{ asset('img') }}/gallery/icon.png" alt=""></a>
                        </div>
                        <div class="g_item_text">
                            <h4>Embosed Logo Design</h4>
                            <p>Client Project</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 brand manipul design" style="position: absolute; left: 480px; top: 0px;">
                    <div class="h_gallery_item">
                        <div class="g_img_item">
                            <img class="img-fluid" src="{{ asset('img') }}/gallery/project-5.jpg" alt="">
                            <a class="light" href="{{ asset('img') }}/gallery/project-5.jpg"><img src="{{ asset('img') }}/gallery/icon.png" alt=""></a>
                        </div>
                        <div class="g_item_text">
                            <h4>3D Disposable Bottle</h4>
                            <p>Client Project</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 brand creative" style="position: absolute; left: 0px; top: 360.75px; display: none;">
                    <div class="h_gallery_item">
                        <div class="g_img_item">
                            <img class="img-fluid" src="{{ asset('img') }}/gallery/project-6.jpg" alt="">
                            <a class="light" href="{{ asset('img') }}/gallery/project-6.jpg"><img src="{{ asset('img') }}/gallery/icon.png" alt=""></a>
                        </div>
                        <div class="g_item_text">
                            <h4>3D Logo Design</h4>
                            <p>Client Project</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="more_btn">
                <a class="main_btn" href="#">Load More Items</a>
            </div>
        </div>
    </section>


@endsection
