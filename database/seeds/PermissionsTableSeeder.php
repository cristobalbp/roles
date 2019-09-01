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
        //Users
        Permission::create([
        	"name" => 'Navegar usuarios',
        	"slug" => 'users.index',
        	"description" => 'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
        	"name" => 'Ver detalle de usuario',
        	"slug" => 'users.show',
        	"description" => 'ver en detalle cada usuario del sistema',
        ]);

        Permission::create([
        	"name" => 'Edicion usuarios',
        	"slug" => 'users.edit',
        	"description" => 'editar los datos de los usuarios del sistema',
        ]);

        Permission::create([
        	"name" => 'Eliminar usuarios',
        	"slug" => 'users.destroy',
        	"description" => 'Eliminar cualquier usuario del sistema',
        ]);

        //Roles
         Permission::create([
        	"name" => 'Navegar roles',
        	"slug" => 'roles.index',
        	"description" => 'Lista y navega todos los roles del sistema',
        ]);

        Permission::create([
        	"name" => 'Ver detalle de rol',
        	"slug" => 'roles.show',
        	"description" => 'ver en detalle cada rol del sistema',
        ]);

        Permission::create([
        	"name" => 'Creacion roles',
        	"slug" => 'roles.create',
        	"description" => 'crear los datos de los roles del sistema',
        ]);

        Permission::create([
        	"name" => 'Edicion roles',
        	"slug" => 'roles.edit',
        	"description" => 'editar los datos de los roles del sistema',
        ]);

        Permission::create([
        	"name" => 'Eliminar roles',
        	"slug" => 'roles.destroy',
        	"description" => 'Eliminar cualquier rol del sistema',
        ]);

          //Products
         Permission::create([
        	"name" => 'Navegar producto',
        	"slug" => 'products.index',
        	"description" => 'Lista y navega todos los productos del sistema',
        ]);

        Permission::create([
        	"name" => 'Ver detalle de producto',
        	"slug" => 'products.show',
        	"description" => 'ver en detalle cada producto del sistema',
        ]);

        Permission::create([
        	"name" => 'Creacion producto',
        	"slug" => 'products.create',
        	"description" => 'crear los datos de los productos del sistema',
        ]);

        Permission::create([
        	"name" => 'Edicion producto',
        	"slug" => 'products.edit',
        	"description" => 'editar los datos de los productos del sistema',
        ]);

        Permission::create([
        	"name" => 'Eliminar producto',
        	"slug" => 'products.destroy',
        	"description" => 'Eliminar cualquier productos del sistema',
        ]);

    }
}
