@extends("layouts.app")

@section("content")


    <section class="banner_area">
        <div class="box_1620">
            <div class="banner_inner d-flex align-items-center">
                <div class="container">
                    <div class="banner_content text-center">
                        <h2>My Skills</h2>
                        <div class="page_link">
                            <a href="{{ route('home') }}">Home</a>
                            <a href="{{ route('skills') }}">My Skills</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="welcome_area p_120">
        <div class="container">
            <div class="row welcome_inner">
                <div>
                    <h4>My Skillset</h4>
                    <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.</p>
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
                <div class="col-lg-6">
                    <div class="tools_expert">
                        <div class="skill_main">
                            <div class="skill_item">
                                <h4>Python <span class="counter">80</span>%</h4>
                                <div class="progress_br">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4>Django <span class="counter">70</span>%</h4>
                                <div class="progress_br">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4>MySQL <span class="counter">60</span>%</h4>
                                <div class="progress_br">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4>React <span class="counter">50</span>%</h4>
                                <div class="progress_br">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4>Photoshop <span class="counter">50</span>%</h4>
                                <div class="progress_br">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
