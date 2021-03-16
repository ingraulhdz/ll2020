<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Car;

class PermissionsCarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

  

        //Car Permissions
        
        Permission::create([
        'name' => 'cars.index',
        'description' => 'User can view main table with some details',
        'front_name' => 'View cars table',
        ]);
        Permission::create([
            'name' => 'cars.edit',
            'description' => 'User can view edit form and update ticket',
            'front_name' => 'Edit ticket',
            ]);
        Permission::create([
                'name' => 'cars.show',
                'description' => 'Can view details of each ticket',
                'front_name' => 'View ticket details',
                ]);    
        Permission::create([
                    'name' => 'cars.create',
                    'description' => 'User can view create form and add new ticket',
                    'front_name' => 'Create a new ticket',
                    ]);      
                    
                    Permission::create([
                        'name' => 'cars.destroy',
                        'description' => 'User can delete a ticket',
                        'front_name' => 'Delete ticket',
                        ]);

                                Permission::create([
                        'name' => 'cars.delete',
                        'description' => 'User can delete a ticket',
                        'front_name' => 'Delete ticket',
                        ]);

                        Permission::create([
                            'name' => 'cars.restore',
                            'description' => 'User can restore a ticket',
                            'front_name' => 'Restore ticket',
                            ]);


    }
}