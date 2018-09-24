<?php
 
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Product;
 
class ProductTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('products')->delete();
 
        Product::create(array(
            'category_id'=>1,
            'name'=>'Počítač',
            'description'=>'Počítač so všetkým',
            'slug'=>'pocitac_i3',
            'price'=>'59.90',
        ));
        Product::create(array(
            'category_id'=>2,
            'name'=>'Notebook',
            'description'=>'Notebook so všetkým',
            'slug'=>'notebook_i3',
            'price'=>'89.90',
        ));
        Product::create(array(
            'category_id'=>3,
            'name'=>'Server',
            'description'=>'Server so všetkým',
            'slug'=>'server_i7',
            'price'=>'159.90',
        ));
 
    }
}