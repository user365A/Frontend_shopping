<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($slug,$categoryId){
        $categoryLimit = category::where('parent_id', 0)->take(4)->get();
        $products = product::where('category_id',$categoryId)->paginate(12);
        $categories=category::where('parent_id',0)->get();
        return view('product.category.list',compact('categoryLimit','products','categories'));
    }
}
