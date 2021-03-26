<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Account;

class AccountPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

  

        //Account Permissions
        
        Permission::create([
        'name' => 'accounts.index',
        'description' => 'User can view main table with some details',
        'front_name' => 'View accounts table',
        'model' => ' Account ',
        ]);
        Permission::create([
            'name' => 'accounts.edit',
            'description' => 'User can view edit form and update Account',
            'front_name' => 'Edit Account',
                    'model' => ' Account ',

            ]);
        Permission::create([
                'name' => 'accounts.show',
                'description' => 'Can view details of each Account',
                'front_name' => 'View Account details',
                        'model' => ' Account ',

                ]);    
        Permission::create([
                    'name' => 'accounts.create',
                    'description' => 'User can view create form and add new Account',
                    'front_name' => 'Create a new Account',
                            'model' => ' Account ',

                    ]);      
                    
        

                                Permission::create([
                        'name' => 'accounts.delete',
                        'description' => 'User can delete a Account',
                        'front_name' => 'Delete Account',
                                'model' => ' Account ',

                        ]);

                        Permission::create([
                            'name' => 'accounts.restore',
                            'description' => 'User can restore a Account',
                            'front_name' => 'Restore Account',
                                    'model' => ' Account ',

                            ]);

                


    }
}