<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
 
        User::create(array(
            'id'=>1,
            'username'=>'admin',
            'email'=>'kopcsanyiludovit@gmail.com',
            'password'=>bcrypt("admin"),
            'admin'=>true,
        ));
 
    }
}
