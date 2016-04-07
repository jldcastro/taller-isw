<?php
/**
 * Created by PhpStorm.
 * User: Familia
 * Date: 07-04-2016
 * Time: 13:30
 */

use\Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder{

    public function run()
    {
        \DB::table('users')->insert(array (

            'name' => 'José Durán',
            'email' => 'jldurancastro@gmail.com',
            'password' => \Hash::make('secret')
        ));
    }
}