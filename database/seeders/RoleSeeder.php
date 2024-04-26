<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //ROLES
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'poster']);

        //PERMISOS
        $posts_store = Permission::create(['name' => 'posts.create'])->syncRoles([$role1, $role2]);
        $posts_store = Permission::create(['name' => 'posts.store'])->syncRoles([$role1, $role2]);
        $imagenes_store = Permission::create(['name' => 'imagenes.store'])->syncRoles([$role1, $role2]);
    }
}
