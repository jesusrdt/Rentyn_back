<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('role_user')->delete();
        DB::table('roles')->truncate();

        $roles = array('admin', 'proveedor', 'cliente');
        foreach ($roles as $role) {
            Role::create(array(
                'name' => $role
            ));
        }
    }
}
