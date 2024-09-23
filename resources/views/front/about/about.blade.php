@extends('front.master')

@section('title')
    About
@endsection

@section('body')
    <section class="about section" id="about" style="background-color: #d5fee8">
        <div class="container">
            <div class="section-header">
                <h3 class="title" data-title="Who Am I">About me and Skills </h3>
            </div>

            <div class="section-body grid-2">
                <div class="column-1">
                    <h3 class="title-sm">Hello, I'm</h3>
                    <p class="text">
                        a dedicated and innovative software engineer with a strong foundation in web and mobile application development. Currently, I am working as an Application Developer at Noman Group, where I leverage my expertise in PHP, Laravel, AJAX, Vue.js, and React Native to build and maintain robust, scalable applications.
                        With a deep understanding of object-oriented programming (OOP) principles and hands-on experience in modern frameworks, I excel in creating efficient and user-friendly solutions.
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
                                <div class="skill-progress" data-progress="70%"></div>
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
                                <div class="skill-progress" data-progress="87%"></div>
                            </div>
                        </div>
                        <div class="skill js">
                            <h3 class="skill-title">Laravel</h3>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="85%"></div>
                            </div>
                        </div>
                        <div class="skill js">
                            <h3 class="skill-title">VueJS</h3>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="65%"></div>
                            </div>
                        </div>
                        <div class="skill js">
                            <h3 class="skill-title">C,C++</h3>
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
@endsection


