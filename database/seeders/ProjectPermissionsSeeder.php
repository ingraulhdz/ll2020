<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Project;

class ProjectPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

  

        //Project Permissions
        
        Permission::create([
        'name' => 'projects.index',
        'description' => 'User can view main table with some details',
        'front_name' => 'View projects table',
        'model' => ' Project ',
        ]);
        Permission::create([
            'name' => 'projects.edit',
            'description' => 'User can view edit form and update Project',
            'front_name' => 'Edit Project',
                    'model' => ' Project ',

            ]);
        Permission::create([
                'name' => 'projects.show',
                'description' => 'Can view details of each Project',
                'front_name' => 'View Project details',
                        'model' => ' Project ',

                ]);    
        Permission::create([
                    'name' => 'projects.create',
                    'description' => 'User can view create form and add new Project',
                    'front_name' => 'Create a new Project',
                            'model' => ' Project ',

                    ]);      
                    
        

                                Permission::create([
                        'name' => 'projects.delete',
                        'description' => 'User can delete a Project',
                        'front_name' => 'Delete Project',
                                'model' => ' Project ',

                        ]);

                        Permission::create([
                            'name' => 'projects.restore',
                            'description' => 'User can restore a Project',
                            'front_name' => 'Restore Project',
                                    'model' => ' Project ',

                            ]);


    }
}