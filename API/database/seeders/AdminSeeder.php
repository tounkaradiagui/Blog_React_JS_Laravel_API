<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'nom' => 'Admin',
            'prenom' => 'Account',
            'email' => 'admin@gmail.com',
            'password' => 'admin@123',
            'adresse' => 'Bko',
            'phone' => '76292270'
        ]);

        $role = Role::create([
            'name' => 'admin'
        ]);

        $permission = Permission::pluck('id', 'id')->all();
        $role->syncPermissions($permission);
        $user->assignRole([$role->id]);
    }
}
