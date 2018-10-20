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
            'product_code'=>'produkt01',
            'name'=>'Počítač',
            'description'=>'Počítač so všetkým',
            'slug'=>'pocitac_i3',
            'price'=>'59.90',
            'stock'=>'10',
            'warranty' => '24 mesiacov',
        ));
        Product::create(array(
            'category_id'=>2,
            'name'=>'Notebook',
            'product_code'=>'produkt02',
            'description'=>'Notebook so všetkým',
            'slug'=>'notebook_i3',
            'price'=>'89.90',
            'stock'=>'10',
            'warranty' => '24 mesiacov',
        ));
        Product::create(array(
            'category_id'=>3,
            'name'=>'Server',
            'product_code'=>'produkt03',
            'description'=>'Server so všetkým',
            'slug'=>'server_i7',
            'price'=>'159.90',
            'stock'=>'10',
            'warranty' => '24 mesiacov',
        ));
 
    }
}