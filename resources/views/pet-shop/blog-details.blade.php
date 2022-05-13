@extends('layouts.master')

@section('title')
    Pet Shop Home Page
@endsection

@section('styles')

@endsection

@section('content')
        <div class="shop-area pt-100 pb-100">
            <div class="container ">
                @foreach($details  as $item)
                <div class="row flex-row-reverse d-flex justify-content-center">
                    <div class="col-lg-9 col-md-8">
                        <div class="blog-details-wrapper res-mrg-top">
                            <div class="single-blog-wrapper">
                                <div class="blog-img mb-30">
                                    <img src="{{ asset("storage/$item->blog_image" ) }}" alt="">
                                </div>
                                <div class="blog-details-content">
                                    <h2>{{ $item->blog_name}}</h2>
                                    <div class="blog-meta">
                                        <ul>
                                            <li>{{$item->updated_at}} </li>
                                        </ul>
                                    </div>
                                </div>
                                {{$item->blog_contnet}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

@endsection

@section('scripts')

@endsection
