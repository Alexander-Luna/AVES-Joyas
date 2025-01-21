<?php

namespace Database\Seeders;

use App\Enums\Roles;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Crear permisos
        foreach (Roles::permissions() as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Crear roles y asignar permisos
        foreach (Roles::roles() as $role) {
            $roleModel = Role::firstOrCreate(['name' => $role]);
            if ($role === Roles::SUPERADMIN->value) {
                $roleModel->syncPermissions(Roles::permissions());
            } elseif ($role === Roles::ADMIN->value) {
                $roleModel->syncPermissions([
                    Roles::VIEW_PRODUCTS->value,
                    Roles::VIEW_ORDERS->value,
                ]);
            } elseif ($role === Roles::CLIENT->value) {
                $roleModel->syncPermissions([
                    Roles::VIEW_PRODUCTS->value,
                ]);
            }
        }


        User::factory()->create([
            'name' => 'Test',
            'ci' => '0000000000',
            'surname' => 'User',
            'email' => 'test@example.com',
        ])->assignRole(Roles::ADMIN->value);
    }
}
