<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container box_1620">

                <a class="navbar-brand logo_h" href="{{ route('home') }}"><img class="rounded-circle" src="{{ asset('img') }}/photo.jpg" height="50px" width="50px" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="{{ route("home") }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route("about") }}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route("projects") }}">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route("skills") }}">Skills</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route("contact") }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
