<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //created 2 roles
        $role1 = new Role;
        $role1->name = "Administrador";
        $role1->description = "Este usuario tendrá acceso a todo el sistema";
        $role1->save();

        $role2 = new Role;
        $role2->name = "trabajador";
        $role2->description = "Este usuario solamente podrá prestar y recibir libros";
        $role2->save();

        //created 5 users
        $users =  User::factory()->count(5)->create();

        //linked users with roles
        $count = 0;
        foreach($users as $user){
            if($count < 2){
                $user->roles()->attach(rand(1, 2));
            }else{
                $user->roles()->attach(2);
            }            
        }               
    }
}
