<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        User::create(array(
            'name' => 'Root User',
            'email' => 'webcustomer@rentyn.com',
            'password' => bcrypt('annonymoususer!!!')
        ));
    }
}
