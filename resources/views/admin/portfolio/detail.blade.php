@extends('admin.master')

@section('title')
    Detail
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row h-100">
                <div class="col-md-12" >
                    <div class="row">
                        <div class="col-md-6">
                        <img src="{{ asset($portfolio->image) }}" class="h-100 w-100 card-img-top" alt=""/>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3>{{ $portfolio->title }}</h3>
                                </div>
                                <div class="card-body">
                                    <p><strong>Description: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda consectetur dignissimos ducimus incidunt, odit! Adipisci aspernatur consectetur, consequuntur doloribus eaque enim ipsa laudantium perspiciatis, recusandae rem totam, vel veritatis.</strong></p>
                                    <div>
                                        <span class="text-info fw-bold border-bottom"><srtong>Live Demo</srtong></span><br><a href="{{ $portfolio->demo }}" class="btn btn-outline-info p-1 m-2">{{ $portfolio->demo }}</a>
                                    </div>
                                    <div>
                                        <span class="text-success fw-bold border-bottom"><srtong>Github Link</srtong></span><br><a href="{{ $portfolio->github }}" class="btn btn-outline-success p-1 m-2">{{ $portfolio->github }}</a>
                                    </div>
{{--                                    <p><b>Live Demo: </b><a href="{{ $portfolio->demo }}">{{ $portfolio->demo }}</a></p>--}}
{{--                                    <p><b>Github Link: </b><a href="{{ $portfolio->github }}">{{ $portfolio->github }}</a></p>--}}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--<div class="container">--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-12">--}}
{{--            <div class="card">--}}
{{--                <img src="{{ asset($portfolio->image) }}" class="h-100 w-100 card-img-top" alt=""/>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6">--}}

{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header">--}}
{{--                            <h3>{{ $portfolio->title }}</h3>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h3>{{ $portfolio->demo }}</h3>--}}
{{--                            <h3>{{ $portfolio->github }}</h3>--}}
{{--                        </div>--}}
{{--                        <div class="card-footer">asdkfjl</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</div>--}}

{{--        <div class="row">--}}
{{--            <div class="col-md-6">--}}
{{--                <div class="card">--}}
{{--                    <img src="{{ asset($portfolio->image) }}" class="h-100 w-100" alt=""/>--}}
{{--                    <div class="card-body">--}}
{{--                        <h3>{{ $portfolio->title }}</h3>--}}
{{--                        <h3>{{ $portfolio->class }}</h3>--}}
{{--                        <h3>{{ $portfolio->demo }}</h3>--}}
{{--                        <h3>{{ $portfolio->github }}</h3>--}}
{{--                        <h3>{{ $portfolio->status }}</h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--                        <section class="py-5">--}}

{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-12 " id="{{ $portfolio->class }}">--}}
{{--                                            <div class="card h-100">--}}
{{--                                                <div class="gallery-image">--}}
{{--                                                    <img src="{{ asset($portfolio->image) }}" class="card-img-top h-100 w-100" alt="" style="height: 350px"/>--}}
{{--                                                    <div class="img-overlay">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="card-body h-auto">--}}
{{--                                                    <div class="img-description">--}}
{{--                                                        <h5>{{ $portfolio->title }}</h5>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="card-footer h-auto">--}}
{{--                                                    <a href="{{ $portfolio->demo }}" class="text-white btn btn-info float-start mx-2">Live Demo</a>--}}
{{--                                                    <a href="{{ $portfolio->github }}" class="text-white btn btn-info float-end ">Github link</a>--}}
{{--                                                    <a href="" class="text-white btn btn-info my-3">Details</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                        </section>--}}

{{--    <div class="grid">--}}
{{--            <div class="grid-item {{ $portfolio->class }}">--}}
{{--                <div class="gallery-image">--}}
{{--                    <img src="{{ asset($portfolio->image) }}" class="h-100 w-100" alt=""/>--}}
{{--                    <div class="img-overlay">--}}
{{--                        --}}{{--                                <div class="plus"></div>--}}
{{--                        <div class="img-description">--}}
{{--                            <h3>{{ $portfolio->title }}</h3>--}}
{{--                            <h5><a class="text-white btn btn-outline-info float-start" href="{{ $portfolio->demo }}">Demo</a></h5>--}}
{{--                            <h5><a class="text-white btn btn-outline-info float-end" href="{{ route('portfolios.show', $portfolio->id) }}">Details</a></h5>--}}
{{--                            --}}{{--                                    <h5><a class="text-white btn btn-outline-info float-end" href="{{ $portfolio->github }}">Details</a></h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--    </div>--}}

@endsection


{{--<h1>kamrul</h1>--}}
