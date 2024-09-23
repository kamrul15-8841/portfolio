@extends('front.master')

@section('title')
    Service
@endsection

@section('body')
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
@endsection


