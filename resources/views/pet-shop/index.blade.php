@extends('layouts.master')

@section('title')
    Pet Shop Home Page
@endsection

@section('styles')

@endsection

@section('content')
        <div class="slider-area">
            <div class="slider-active owl-dot-style owl-carousel">
                @foreach( $sliders as $slider)
                <div class="single-slider pt-100 pb-100 yellow-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 col-sm-7">
                                <div class="slider-content slider-animated-1 pt-114">
                                    <h2 class="animated">{{$slider->title}}</h2>
                                    <h4 class="animated">{{$slider->text}}</h4>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 col-sm-5">
                                <div class="slider-single-img slider-animated-1">
                                    <img class="animated" src="{{ asset("storage/$slider->simage" ) }} " alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="food-category food-category-col pt-100 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-food-category cate-padding-1 text-center mb-30">
                            <div class="single-food-hover-2">
                                <img src="{{asset('img/product/product-1.jpg')}} " alt="">
                            </div>
                            <div class="single-food-content">
                                <h3>Dogs Food</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-food-category cate-padding-2 text-center mb-30">
                            <div class="single-food-hover-2">
                                <img src="{{asset('img/product/product-2.jpg')}} " alt="">
                            </div>
                            <div class="single-food-content">
                                <h3>Cats Food</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-area pt-95 pb-70 gray-bg">
            <div class="container">
                <div class="section-title text-center mb-55">
                    <h4>Most Populer</h4>
                    <h2>Recent Products</h2>
                </div>
                <div class="row">
                    @foreach($randProducts as $randProduct)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="product-wrapper mb-10">
                            <div class="product-img">
                                <a href="{{route('pet-shop/product-details', ['id'=>$randProduct->id] )}}">
                                    <img src="{{asset("storage/$randProduct->image" )}} " alt="">
                                </a>
                                <div class="product-action">
                                    <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class="ti-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="{{route('pet-shop/product-details', ['id'=>$randProduct->id] )}}">
                                        {{$randProduct->name}}</a></h4>
                                <div class="product-price">
                                    <span class="new">{{$randProduct->price}} </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="deal-area bg-img pt-95 pb-100">
            @foreach($product as $item)
            <div class="container">
                <div class="section-title text-center mb-50">
                    <h4>Best Product</h4>
                    <h2>Deal of the Week</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="deal-img wow fadeInLeft">
                            <a href="{{route('pet-shop/product-details', ['id'=>$item->id] )}}">
                                <img src="{{ asset("storage/$item->image") }} " alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 d-flex align-items-center">
                        <div class="deal-content">
                            <h3><a href="#">{{$item->name}}</a></h3>
                            <div class="deal-pro-price">
                                <span> {{$item->price}}</span>
                            </div>
                            <p>{{$item->descrition}} </p>
                            <div class="timer timer-style">
                                <div data-countdown="2022/10/01"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
		<div class="service-area bg-img pt-100 pb-65">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-4 col-md-4">
		                <div class="service-content text-center mb-30 service-color-1">
		                    <img src="{{asset('img/icon-img/shipping.png')}} " alt="">
		                    <h4>FREE SHIPPING</h4>
		                    <p>Free shipping on all order </p>
		                </div>
		            </div>
		            <div class="col-lg-4 col-md-4">
		                <div class="service-content text-center mb-30 service-color-2">
		                    <img src="{{asset('img/icon-img/support.png')}} " alt="">
		                    <h4>ONLINE SUPPORT</h4>
		                    <p>Online support 24 hours a day</p>
		                </div>
		            </div>
		            <div class="col-lg-4 col-md-4">
		                <div class="service-content text-center mb-30 service-color-3">
		                    <img src="{{asset('img/icon-img/money.png')}} " alt="">
		                    <h4>MONEY RETURN</h4>
		                    <p>Back guarantee under 5 days</p>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<div class="blog-area pb-70">
		    <div class="container">
		        <div class="section-title text-center mb-60">
                    <h4>Latest News</h4>
                    <h2>From Our Blog</h2>
                </div>
                <div class="row">
                    @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-wrapper mb-30 gray-bg">
                            <div class="blog-img hover-effect">
                                <a href="{{route('pet-shop/blog-details', ['id'=>$blog->id])}}"><img alt="" src="{{ asset("storage/$blog->blog_image" ) }} "></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li>{{$blog->updated_at}}</li>
                                    </ul>
                                </div>
                                <h4><a href="blog-details.blade.php">{{$blog->blog_name}}</a></h4>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
		    </div>
		</div>
@endsection

@section('scripts')

@endsection




