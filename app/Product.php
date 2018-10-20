<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
	protected $fillable = [
        'category_id', 'product_code', 'name', 'slug', 'warranty', 'stock', 'description', 'price',
    ];

    public function priceWithVat() {

    	return number_format($this->price*1.2, 2);

    }

}
