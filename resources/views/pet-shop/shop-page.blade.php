@extends('layouts.master')

@section('title')
    Pet Shop Home Page
@endsection



@section('styles')

@endsection

@section('content')

    <div class="shop-area pt-100 pb-100 gray-bg">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-12">
                    <div class="shop-topbar-wrapper">
                        <div class="product-sorting-wrapper">
                            <div class="product-show shorting-style">
{{--                                <label>Showing <span>1-20</span> of <span>100</span> Results</label>--}}
{{--                                <select>--}}
{{--                                    <option value="">12</option>--}}
{{--                                    <option value="">24</option>--}}
{{--                                    <option value="">36</option>--}}
{{--                                </select>--}}
                            </div>
                        </div>
                        <div class="grid-list-options">
                            <ul class="view-mode">
                                <li class="active"><a href="#product-grid" data-view="product-grid"><i class="ti-layout-grid4-alt"></i></a></li>
                                <li><a href="#product-list" data-view="product-list"><i class="ti-align-justify"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="grid-list-product-wrapper">
                        <div class="product-view product-grid">
                            <div class="row">
                                @foreach($products as $product)
                                <div class="product-width col-lg-6 col-xl-3 col-md-6 col-sm-6">
                                    <div class="product-wrapper mb-10">
                                        <div class="product-img">
                                            <a href="{{route('pet-shop/product-details', ['id'=>$product->id] )}}">
                                                <img src="{{ asset("storage/$product->image" ) }}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">{{$product->name}}</a></h4>
                                            <div class="product-price">
                                                <span class="new">{{$product->price}}</span>
                                            </div>
                                        </div>
                                        <div class="product-list-content">
                                            <h4><a href="#">Dog Calcium Food</a></h4>
                                            <div class="product-price">
                                                <span class="new">{{$product->price}} </span>
                                            </div>
                                            <p>{{$product->descrition}}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="d-flex justify-content-center">{{$products->links()}}</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
