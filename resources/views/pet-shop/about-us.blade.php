@extends('layouts.master')

@section('title')
    Pet Shop Home Page
@endsection

@section('styles')

@endsection

@section('content')

        <div class="about-us-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="about-us-img pr-30 wow fadeInLeft">
                            <img alt="" src="{{ asset('img/banner/banner-3.png') }} ">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 d-flex align-items-center">
                        <div class="about-us-content">
                            <h2>About Marten</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipis elit, sed do eiusmod tempor incididu ut labore et dolore magna aliqua. Ut enim ad minim  quis nostrud exercitat ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="about-us-list">
                                <ul>
                                    <li>There are many variations of passages</li>
                                    <li>Contrary to popular belief is not simply</li>
                                    <li>But I must explain to you how all this mistaken </li>
                                </ul>
                            </div>
                            <div class="about-us-btn">
                                <a class="btn-style" href="#">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-count-area pb-70 pt-100 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="single-count mb-30 text-center">
                            <h2 class="count">18</h2>
                            <span>Years in Business</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="single-count mb-30 text-center">
                            <h2 class="count">290</h2>
                            <span>Happy People</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="single-count mb-30 text-center">
                            <h2 class="count">24</h2>
                            <span>Billion Sales</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="single-count mb-30 text-center">
                            <h2 class="count">17</h2>
                            <span>Award Winning</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('scripts')

@endsection
