<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Activity_log;

class Activity_logPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

  

        //Activity_log Permissions
        
        Permission::create([
        'name' => 'activity_logs.index',
        'description' => 'User can view main table with some details',
        'front_name' => 'View activity_logs table',
        'model' => 'Activity_log',
        ]);
        Permission::create([
            'name' => 'activity_logs.edit',
            'description' => 'User can view edit form and update Activity_log',
            'front_name' => 'Edit Activity_log',
                    'model' => 'Activity_log',

            ]);
        Permission::create([
                'name' => 'activity_logs.show',
                'description' => 'Can view details of each Activity_log',
                'front_name' => 'View Activity_log details',
                        'model' => 'Activity_log',

                ]);    
        Permission::create([
                    'name' => 'activity_logs.create',
                    'description' => 'User can view create form and add new Activity_log',
                    'front_name' => 'Create a new Activity_log',
                            'model' => 'Activity_log',

                    ]);      
                    
        

                                Permission::create([
                        'name' => 'activity_logs.delete',
                        'description' => 'User can delete a Activity_log',
                        'front_name' => 'Delete Activity_log',
                                'model' => 'Activity_log',

                        ]);

                        Permission::create([
                            'name' => 'activity_logs.restore',
                            'description' => 'User can restore a Activity_log',
                            'front_name' => 'Restore Activity_log',
                                    'model' => 'Activity_log',

                            ]);


    }
}