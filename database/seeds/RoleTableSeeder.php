<?php


use Illuminate\Database\Seeder;
use Contaeduc\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'admin';
        $role->description = 'Administrator';
        $role->save();
        $role = new Role();
        $role->name = 'profe';
        $role->description = 'Profesor';
        $role->save();
        $role = new Role();
        $role->name = 'alumno';
        $role->description = 'Alumno';
        $role->save();
    }
}
