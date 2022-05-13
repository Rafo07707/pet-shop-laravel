@extends('layouts.master')

@section('title')
    Pet Shop Product Page
@endsection



@section('styles')

@endsection

@section('content')

<div class="shop-area pt-95 pb-100">
    <div class="container">
        <div class="row">
            @foreach($product as $item)
            <div class="col-lg-6 col-md-6">
                <div class="product-details-img">
                    <img id="zoompro" src="{{ asset("storage/$item->image" ) }} " alt="zoom"/>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 d-flex align-items-center">
                <div class="product-details-content">
                    <h2>{{$item->name}}</h2>
                    <div class="product-price">
                        <span class="new">{{$item->price}} </span>
                    </div>
                    <p>{{$item->descrition}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="related-product-area pt-95 pb-80 gray-bg">
    <div class="container">
        <div class="section-title text-center mb-55">
            <h4>Most Populer</h4>
            <h2>Related Products</h2>
        </div>
        <div class="related-product-active owl-carousel">
            @foreach($reltedProducts as $item)
            <div class="product-wrapper">
                <div class="product-img">
                    <a href="{{route('pet-shop/product-details', ['id'=>$item->id] )}}">
                        <img src="{{asset("storage/$item->image" )}} " alt="">
                    </a>
                    <div class="product-action-wishlist">
                        <a title="Wishlist" href="#">
                            <i class="ti-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content">
                    <h4><a href="product-details.html">{{$item->name}}</a></h4>
                    <div class="product-price">
                        <span class="new">{{$item->price}} </span>
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
