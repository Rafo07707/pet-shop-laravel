@extends('layouts.master')

@section('title')
    Pet Shop Blog Page
@endsection

@section('styles')

@endsection

@section('content')
        <div class="breadcrumb-area pt-95 pb-95 bg-img" style="background-image:url({{asset('img/banner/banner-2.jpg')}});">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>Blog</h2>
                    <ul>
                        <li><a href="index.blade.php">home</a></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="blog-area pt-100 pb-100 clearfix">
            <div class="container">
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
                                    <h4><a href="{{route('pet-shop/blog-details', ['id'=>$blog->id])}}">{{$blog->blog_name}}</a></h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center">{{$blogs->links()}}</div>
            </div>
        </div>
@endsection

@section('scripts')

@endsection
