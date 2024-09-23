<header id="header">
    <div class="overlay overlay-lg">
        <img src="{{ asset('/') }}front/img/shapes/square.png" class="shape square" alt="" />
        <img src="{{ asset('/') }}front/img/shapes/circle.png" class="shape circle" alt="" />
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
        <img src="{{ asset('/') }}front/img/shapes/x.png" class="shape xshape" alt="" />
        <img src="{{ asset('/') }}front/img/shapes/wave.png" class="shape wave wave1" alt="" />
        <img src="{{ asset('/') }}front/img/shapes/wave.png" class="shape wave wave2" alt="" />
        <img src="{{ asset('/') }}front/img/shapes/triangle.png" class="shape triangle" alt="" />
        <img src="{{ asset('/') }}front/img/shapes/letters.png" class="letters" alt="" />
        <img src="{{ asset('/') }}front/img/shapes/points1.png" class="points points1" alt="" />
    </div>

    <nav>
        <div class="container">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('/') }}front/img/logo.png" alt="" />
                </a>
            </div>

            <div class="links">
                <ul>
                    <li>
                        <a class="nav-link" class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('service') }}">Services</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('all-portfolio') }}">Portfolio</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>

                    <li>
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    
                    <li>
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    
                    <li>
                        <a class="nav-link" href="{{ route('gallery') }}" class="active">Gallery</a>
                    </li>
{{--                    <li>--}}
{{--                        <a class="nav-link" href="#hireme" class="active">Hire me</a>--}}
{{--                    </li>--}}
                </ul>
            </div>


            <div class="hamburger-menu">
                <div class="bar"></div>
            </div>
        </div>
    </nav>
{{--    <div class="header-content">--}}
{{--        <div class="container grid-2">--}}
{{--            <div class="column-1">--}}
{{--                <h1 class="header-title">Md. Kamrul Hasan</h1>--}}
{{--                <p class="text">--}}
{{--                    Hello, I'm Md. Kamrul Hasan, web design and developer.--}}
{{--                    I believe I am a good team worker and I have the skills, qualifications, and experience necessary to make a significant contribution to your organization.--}}
{{--                    hic!--}}
{{--                </p>--}}
{{--                <a href="https://drive.google.com/drive/u/0/folders/1e0W8Rz-nAmuLRohAY8r1vwxwdU4pcyr4" class="btn">Download CV</a>--}}
{{--            </div>--}}

{{--            <div class="column-2 image">--}}
{{--                <img--}}
{{--                    src="{{ asset('/') }}front/img/shapes/points2.png"--}}
{{--                    class="points points2"--}}
{{--                    alt=""--}}
{{--                />--}}
{{--                <img src="{{ asset('/') }}front/img/person.png" class="img-element z-index" alt="" />--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


</header>
