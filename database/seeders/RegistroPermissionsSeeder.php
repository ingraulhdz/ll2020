<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Registro;

class RegistroPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

  

        //Registro Permissions
        
        Permission::create([
        'name' => 'registros.index',
        'description' => 'User can view main table with some details',
        'front_name' => 'View registros table',
        'model' => 'Registro',
        ]);
        Permission::create([
            'name' => 'registros.edit',
            'description' => 'User can view edit form and update Registro',
            'front_name' => 'Edit Registro',
                    'model' => 'Registro',

            ]);
        Permission::create([
                'name' => 'registros.show',
                'description' => 'Can view details of each Registro',
                'front_name' => 'View Registro details',
                        'model' => 'Registro',

                ]);    
        Permission::create([
                    'name' => 'registros.create',
                    'description' => 'User can view create form and add new Registro',
                    'front_name' => 'Create a new Registro',
                            'model' => 'Registro',

                    ]);      
                    
        

                                Permission::create([
                        'name' => 'registros.delete',
                        'description' => 'User can delete a Registro',
                        'front_name' => 'Delete Registro',
                                'model' => 'Registro',

                        ]);

                        Permission::create([
                            'name' => 'registros.restore',
                            'description' => 'User can restore a Registro',
                            'front_name' => 'Restore Registro',
                                    'model' => 'Registro',

                            ]);


    }
}