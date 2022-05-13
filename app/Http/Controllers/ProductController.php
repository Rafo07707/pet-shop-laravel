<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Product;
use App\Slider;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function shopList(Request $request)
    {
        $products = Product::paginate(4);
        $product = Product::query()->where(['id' => $request->id])->get();

        return view('pet-shop/shop-page', [
            'products'=> $products,
            'product' => $product,
            ]);
    }

    public function home(){
        $sliders = Slider::all();
        $blogs = Blog::query()->select()->inRandomOrder()->limit(3)->get();
        $product = Product::query()->select()->inRandomOrder()->limit(1)->get();
        $randProducts = Product::query()->select()->inRandomOrder()->limit(4)->get();

        return view('pet-shop/index',[
            'sliders'=>$sliders,
            'blogs' => $blogs,
            'randProducts'=> $randProducts,
            'product' => $product,
        ]);

    }


    public function productDetails(Request $request)
    {

        $product = Product::query()->where(['id' => $request->id])->get();
        $reltedProducts = Product::query()->select()->inRandomOrder()->limit(8)->get();


        return view('pet-shop/product-details',[
            'product' => $product,
            'reltedProducts'=> $reltedProducts,
        ]);
    }




    public function blog()
    {
        $blogs = Blog::paginate(6);
        return view('pet-shop/blog', [
            'blogs' => $blogs,
        ]);

        return back();
    }

    public  function blogDetails(Request $request)
    {

        $details = Blog::query()->where(['id' => $request->id])->get();

        return view('pet-shop/blog-details',[
            'details'=>$details,
        ]);
    }
}
