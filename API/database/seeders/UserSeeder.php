<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'nom' => 'User',
            'prenom' => 'Account',
            'email' => 'user@gmail.com',
            'password' => 'user@123',
            'adresse' => 'Gogui',
            'phone' => '50226150'
        ]);

        $role = Role::create([
            'name' => 'user'
        ]);

        $permission = Permission::pluck('id', 'id')->all();
        $role->syncPermissions($permission);
        $user->assignRole([$role->id]);
    }
}
