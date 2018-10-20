<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thumbnail extends Model
{
    
	protected $fillable = [
        'product_id', 'file_name', 'file_size', 'file_mime', 'file_path',
    ];

}
