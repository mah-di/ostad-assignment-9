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


    @include("components.projects")


@endsection
