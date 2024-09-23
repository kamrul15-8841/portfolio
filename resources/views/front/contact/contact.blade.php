@extends('front.master')

@section('title')
    Contact
@endsection

@section('body')
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
@endsection

