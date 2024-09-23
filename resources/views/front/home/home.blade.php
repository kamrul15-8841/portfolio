@extends('front.master')

@section('title')
    Home
@endsection
@section('body')

    <div class="header-content">
        <div class="container grid-2">
            <div class="column-1">
                <h1 class="header-title">Md. Kamrul Hasan</h1>
                <p class="text">
                    Hello, I'm Md. Kamrul Hasan, web design and developer.
                    I believe I am a good team worker and I have the skills, qualifications, and experience necessary to make a significant contribution to your organization.
                    hic!
                </p>
                <a href="https://drive.google.com/drive/u/0/folders/1e0W8Rz-nAmuLRohAY8r1vwxwdU4pcyr4" class="btn">Download CV</a>
            </div>

            <div class="column-2 image">
                <img
                    src="{{ asset('/') }}front/img/shapes/points2.png"
                    class="points points2"
                    alt=""
                />
                <img src="{{ asset('/') }}front/img/person.png" class="img-element z-index" alt="" />
            </div>
        </div>
    </div>

    <section class="services section bg-light" id="services">
        <div class="container">
            <div class="section-header">
                <h3 class="title" data-title="What I Do">Services</h3>
                <p class="text">
                    I am software engineer. What I do you can find out below.
                </p>
            </div>

            <div class="cards">
                @foreach($services as $service)
                    <div class="card-wrap">
                        <img
                            src="{{ asset('/') }}front/img/shapes/points3.png"
                            class="points points1 points-sq"
                            alt=""
                        />
                        <div class="card" data-card="UI/UX">
                            <div class="card-content z-index">
                                <img src="{{ asset($service->image) }}" class="icon" alt="" />
                                <h3 class="title-sm">{{ $service->title }}</h3>
                                <p class="text">
                                    {{ $service->description }}
                                </p>
                                <a href="#" class="btn small">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="portfolio section" id="portfolio">
        <div class="background-bg">
            <div class="overlay overlay-sm">
                <img
                    src="{{ asset('/') }}front/img/shapes/half-circle.png"
                    class="shape half-circle1"
                    alt=""
                />
                <img
                    src="{{ asset('/') }}front/img/shapes/half-circle.png"
                    class="shape half-circle2"
                    alt=""
                />
                <img src="{{ asset('/') }}front/img/shapes/square.png" class="shape square" alt="" />
                <img src="{{ asset('/') }}front/img/shapes/wave.png" class="shape wave" alt="" />
                <img src="{{ asset('/') }}front/img/shapes/circle.png" class="shape circle" alt="" />
                <img
                    src="{{ asset('/') }}front/img/shapes/triangle.png"
                    class="shape triangle"
                    alt=""
                />
                <img src="{{ asset('/') }}front/img/shapes/x.png" class="shape xshape" alt="" />
            </div>
        </div>

        <div class="container">
            <div class="section-header">
                <h3 class="title" data-title="My works" id="portfolio">Portfolio</h3>
            </div>

            <div class="section-body">
                <div class="filter">
                    <button class="filter-btn active" data-filter="*">All</button>
                    <button class="filter-btn" data-filter=".webdes">Web Design</button>
                    <button class="filter-btn" data-filter=".webdev">Web Development</button>
                    <button class="filter-btn" data-filter=".appdev">Mobile App</button>
                </div>
{{--                <section class="py-5">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-12">--}}
{{--                            <div class="row">--}}
{{--                                @foreach($portfolios as $portfolio)--}}
{{--                                <div class="col-md-4 " id="{{ $portfolio->class }}">--}}
{{--                                    <div class="card h-100">--}}
{{--                                        <div class="gallery-image">--}}
{{--                                            <img src="{{ asset($portfolio->image) }}" class="card-img-top h-100 w-100" alt="" style="height: 350px"/>--}}
{{--                                            <div class="img-overlay">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-body h-auto">--}}
{{--                                            <div class="img-description">--}}
{{--                                                <h5>{{ $portfolio->title }}</h5>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-footer h-auto">--}}
{{--                                            <a href="{{ $portfolio->demo }}" class="text-white btn btn-info float-start mx-2">Live Demo</a>--}}
{{--                                            <a href="{{ $portfolio->github }}" class="text-white btn btn-info float-end ">Github link</a>--}}
{{--                                            <a href="" class="text-white btn btn-info my-3">Details</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </section>--}}

                <div class="grid">
                    @foreach($portfolios as $portfolio)
                    <div class="grid-item {{ $portfolio->class }}">
                        <div class="gallery-image">
                            <img src="{{ asset($portfolio->image) }}" class="h-100 w-100" alt=""/>
                            <div class="img-overlay">
{{--                                <div class="plus"></div>--}}
                                <div class="img-description">
                                    <h3>{{ $portfolio->title }}</h3>
                                    <h5><a class="text-white btn btn-outline-info float-start" href="{{ $portfolio->demo }}">Demo</a></h5>
                                    <h5><a class="text-white btn btn-outline-info float-end" href="{{route('portfolio-detail',['id' => $portfolio->id])}}">Details</a></h5>
{{--                                    <h5><a class="text-white btn btn-outline-info float-end" href="{{ route('portfolios.show', $portfolio->id) }}">Details</a></h5>--}}
{{--                                    <h5><a class="text-white btn btn-outline-info float-end" href="{{ $portfolio->github }}">Details</a></h5>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="more-folio">
                    <a href="#portfolio" class="btn">More Folio</a>
                </div>
            </div>
        </div>
    </section>
    <!-- about -->

    <section class="about section" id="about">
        <div class="container">
            <div class="section-header">
                <h3 class="title" data-title="Who Am I">About me and Skills </h3>
            </div>

            <div class="section-body grid-2">
                <div class="column-1">
                    <h3 class="title-sm">Hello, I'm</h3>
                    <p class="text">
                        self-motivated, energetic, enthusiastic and ever ready to learn new things.
                        I am confident to ensuring the highest level of professionalism and commitment to my job.
                        I am able to handle multiple tasks on a daily basis.
                        I use a creative approach to problem solving. I have experience of working as part of a team and individually.
                    </p>
                    <div class="skills">
                        <div class="skill html">
                            <h3 class="skill-title">HTML</h3>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="90%"></div>
                            </div>
                        </div>
                        <div class="skill css">
                            <h3 class="skill-title">CSS</h3>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="90%"></div>
                            </div>
                        </div>
                        <div class="skill js">
                            <h3 class="skill-title">JavaScript</h3>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="60%"></div>
                            </div>
                        </div>
                        <div class="skill js">
                            <h3 class="skill-title">Bootstrap</h3>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="90%"></div>
                            </div>
                        </div>
                        <div class="skill js">
                            <h3 class="skill-title">PHP</h3>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="80%"></div>
                            </div>
                        </div>
                        <div class="skill js">
                            <h3 class="skill-title">VueJS</h3>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="40%"></div>
                            </div>
                        </div>
                        <div class="skill js">
                            <h3 class="skill-title">C,C++</h3>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="80%"></div>
                            </div>
                        </div>
                        <div class="skill js">
                            <h3 class="skill-title">Laravel</h3>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="80%"></div>
                            </div>
                        </div>
                        <div class="skill js">
                            <h3 class="skill-title">Java</h3>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="60%"></div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn">Read more</a>
                </div>

                <div class="column-2 image">
                    <img src="{{ asset('/') }}front/img/shapes/points4.png" class="points" alt="" />
                    <img src="{{ asset('/') }}front/img/about.png" class="z-index" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="container">
            <div class="contact-box">
                <div class="contact-info">
                    <h3 class="title">Get in touch</h3>
                    <p class="text">
                        Here is my detail contact information.
                    </p>
                    <div class="information-wrap">
                        <div class="information">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <p class="info-text">West Rajabazar, Dhaka-1215</p>
                        </div>

                        <div class="information">
                            <div class="contact-icon">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            <p class="info-text">hkamrul703@gmail.com</p>
                        </div>

                        <div class="information">
                            <div class="contact-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <p class="info-text">01771883916</p>
                        </div>
                    </div>
                </div>

                <div class="contact-form">
                    <h3 class="title">Contact me</h3>
                    <h5 class="text-center text-info">{{Session::has('message') ? Session::get('message') : ''}}</h5>
                    <form method="POST" action="{{route('add-contact')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <input type="text" name="first_name" class="contact-input" placeholder="First Name"/>
                            <input type="text" name="last_name" class="contact-input" placeholder="Last Name"/>
                        </div>
                        <div class="row">
                            <input type="text" name="phone" class="contact-input" placeholder="Phone"/>
                            <input type="email" name="email" class="contact-input" placeholder="Email"/>
                        </div>
                        <div class="row">
                            <textarea name="message" class="contact-input textarea" placeholder="Message"></textarea>
                        </div>

                        <div class="row contact-input">
                            <input type="submit"  class="btn fw-bold text-info" value="Send">
                            {{--                            <a href="#" class="btn fw-bold text-info ">Send</a>--}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="hireme" id="hireme">
        <div class="container">
            <h3 class="title">If you are Interested</h3>
            <p class="text">
                If you want to hire me then clck the button beow.
            </p>
            <a href="#contact" class="btn">Hire me</a>
        </div>
    </section>
@endsection
