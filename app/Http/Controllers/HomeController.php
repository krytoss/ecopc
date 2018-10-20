<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Thumbnail;

class HomeController extends Controller
{
    
	public function index() {
		
		return view('home');

	}


	public function showProducts($cat = Null) {

		if ($cat) {

			$catID = Category::where('slug', $cat)->first()->id;
			return view('products')->with('products', Product::where('category_id', $catID)->get())->with('categories', Category::all());

		} else {

			return view('products')->with('products', Product::all())->with('categories', Category::all());

		}

	}

	public function showProduct($slug) {

		$product = Product::where('slug', $slug)->first();
		return view('product')->with('product', $product)->with('thumbnails', Thumbnail::where('product_id', $product->id)->get())->with('categories', Category::all());

	}

}
