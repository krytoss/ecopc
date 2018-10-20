<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Thumbnail;
use Image;

class ProductsController extends Controller
{

	public function index() {

		$products = Product::all();
		$categories = Category::all();
		return view('admin.products', ['products' => $products, 'categories' => $categories]);

	}

	public function new() {

		$categories = Category::pluck('name', 'id')->toArray();
		return view('admin.addProduct', ['categories' => $categories]);

	}

	public function store(StoreProductRequest $request) {

		print_r($request->request);
		die();

		$product = new Product;
		$product->name 			= $request->name;
		$product->category_id 	= $request->category_id;
		$product->product_code	= $request->product_code;
		$product->warranty 		= $request->warranty;
		$product->price 		= $request->price;
		$product->stock			= $request->stock;
		$product->slug 			= $this->getUniqueSlug(str_slug($request->name, '_'));
		$product->description 	= $request->description;
		$product->save();

		if ($request->image) {
			foreach ($request->image as $img) {

				$filename  = time() . '.' . $img->getClientOriginalExtension();
				$size = $img->getSize();
				$mime = $img->getClientMimeType();
	            $path = public_path('img/products/' . $filename);

				/* $img = Image::create([
					'file_name' => $filename,
					'file_size' => $size,
					'file_mime' => $file->getClientMimeType(),
					'file_path' => 'gallery/images/' . $filename,
				]); */

				$thumb = new Thumbnail;
				$thumb->product_id 		= $product->id;
				$thumb->file_name 		= $filename;
				$thumb->file_size 		= $size;
				$thumb->file_mime 		= $mime;
				$thumb->file_path 		= $path;
				$thumb->save();

	            Image::make($img->getRealPath())->resize(255, 240)->save($path);

			}
		}

		return redirect()->back()->with('success', 'Produkt bol úspešne pridaný.');

	}

	function getUniqueSlug($slug) {

		$count = 1;
		$tmp = $slug;
		while (Product::where('slug', $tmp)->count() > 0) {
			$tmp = $slug . "_" . $count;
			$count += 1;
		}
		return $tmp;

	}

}
