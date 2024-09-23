@extends('front.master')

@section('title')
    Portfolio
@endsection

@section('body')

    <section class="portfolio section" id="portfolio" style="background-color: #00df6e">
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
                        <div class="grid-item {{ $portfolio->class }}"
                             style="border: 1px solid yellow; border-radius: 30px;">
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

{{--                <div class="more-folio">--}}
{{--                    <a href="#portfolio" class="btn">More Folio</a>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>

@endsection


