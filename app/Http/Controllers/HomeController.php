<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class HomeController extends Controller
{
    
	public function index() {
		
		return view('home');

	}


	public function showProducts($cat = Null) {

		if ($cat) {

			$catID = Category::where('slug', $cat)->first()->id;
			return view('offer')->with('products', Product::where('category_id', $catID)->get());

		} else {

			return view('offer')->with('products', Product::all());

		}

	}

}
