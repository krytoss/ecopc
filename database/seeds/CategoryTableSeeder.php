<?php
 
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Category;
 
class CategoryTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('categories')->delete();
 
        Category::create(array(
        'name'=>'Počítače',
        'slug'=>'pc',
        ));
        Category::create(array(
        'name'=>'Notebooky',
        'slug'=>'laptops',
        ));
        Category::create(array(
        'name'=>'Servery',
        'slug'=>'servers',
        ));
 
  }
     
}
