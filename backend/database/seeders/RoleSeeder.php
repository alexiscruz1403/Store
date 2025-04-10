<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = new Role();
        $role->role_name = 'Cliente';
        $role->role_description = 'Rol de cliente';
        $role->save();

        $role = new Role();
        $role->role_name = 'Deposito';
        $role->role_description = 'Rol de deposito';
        $role->save();

        $role = new Role();
        $role->role_name = 'Administrador';
        $role->role_description = 'Rol de administrador';
        $role->save();
    }
}
