<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use App\Models\slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        $sliders=slider::Latest()->get();
        $categories=category::where('parent_id',0)->get();
        $categoryLimit = category::where('parent_id', 0)->take(4)->get();
        $products=product::Latest()->take(6)->get();
        $productRecommend=product::Latest('views_count','desc')->take(6)->get();
        return view('home.home',compact('sliders','categories','products','productRecommend','categoryLimit'));
    }

}
