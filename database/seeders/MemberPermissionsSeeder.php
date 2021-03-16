<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Member;

class MemberPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

  

        //Member Permissions
        
        Permission::create([
        'name' => 'members.index',
        'description' => 'User can view main table with some details',
        'front_name' => 'View members table',
        'model' => ' Member ',
        ]);
        Permission::create([
            'name' => 'members.edit',
            'description' => 'User can view edit form and update Member',
            'front_name' => 'Edit Member',
                    'model' => ' Member ',

            ]);
        Permission::create([
                'name' => 'members.show',
                'description' => 'Can view details of each Member',
                'front_name' => 'View Member details',
                        'model' => ' Member ',

                ]);    
        Permission::create([
                    'name' => 'members.create',
                    'description' => 'User can view create form and add new Member',
                    'front_name' => 'Create a new Member',
                            'model' => ' Member ',

                    ]);      
                    
        

                                Permission::create([
                        'name' => 'members.delete',
                        'description' => 'User can delete a Member',
                        'front_name' => 'Delete Member',
                                'model' => ' Member ',

                        ]);

                        Permission::create([
                            'name' => 'members.restore',
                            'description' => 'User can restore a Member',
                            'front_name' => 'Restore Member',
                                    'model' => ' Member ',

                            ]);


    }
}