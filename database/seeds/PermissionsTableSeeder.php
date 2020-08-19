<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User
        Permission::create([
            'name'        => 'Navegar usuarios',
            'slug'        => 'user.index',
            'description' => 'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'        => 'Ver detalle de usuario',
            'slug'        => 'user.show',
            'description' => 'Ver detalle cada usuario del sistema',
        ]);
        Permission::create([
            'name'        => 'Edición de usuarios',
            'slug'        => 'user.edit',
            'description' => 'Editar cualquier dato de un usuario del sistema',
        ]);
        Permission::create([
            'name'        => 'Eliminar usuarios',
            'slug'        => 'user.destroy',
            'description' => 'Eliminar cualquier dato de un usuario del sistema',
        ]);

        //Roles
        Permission::create([
            'name'        => 'Navegar roles',
            'slug'        => 'roles.index',
            'description' => 'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
            'name'        => 'Ver detalle de rol',
            'slug'        => 'roles.show',
            'description' => 'Ver detalle cada rol del sistema',
        ]);
        Permission::create([
            'name'        => 'Edición de roles',
            'slug'        => 'roles.edit',
            'description' => 'Editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
            'name'        => 'Creación de roles',
            'slug'        => 'roles.create',
            'description' => 'Editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
            'name'        => 'Eliminar roles',
            'slug'        => 'roles.destroy',
            'description' => 'Eliminar cualquier dato de un rol del sistema',
        ]);

        //Producto
        Permission::create([
            'name'        => 'Navegar productos',
            'slug'        => 'products.index',
            'description' => 'Lista y navega todos los productos del sistema',
        ]);
        Permission::create([
            'name'        => 'Ver detalle de producto',
            'slug'        => 'products.show',
            'description' => 'Ver detalle cada producto del sistema',
        ]);
        Permission::create([
            'name'        => 'Edición de roles',
            'slug'        => 'products.edit',
            'description' => 'Editar cualquier dato de un producto del sistema',
        ]);
        Permission::create([
            'name'        => 'Creación de productos',
            'slug'        => 'products.create',
            'description' => 'Editar cualquier dato de un producto del sistema',
        ]);
        Permission::create([
            'name'        => 'Eliminar productos',
            'slug'        => 'products.destroy',
            'description' => 'Eliminar cualquier dato de un producto del sistema',
        ]);
    }
}
