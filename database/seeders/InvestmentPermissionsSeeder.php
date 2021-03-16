<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Investment;

class InvestmentPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

  

        //Investment Permissions
        
        Permission::create([
        'name' => 'investments.index',
        'description' => 'User can view main table with some details',
        'front_name' => 'View investments table',
        'model' => ' Investment ',
        ]);
        Permission::create([
            'name' => 'investments.edit',
            'description' => 'User can view edit form and update Investment',
            'front_name' => 'Edit Investment',
                    'model' => ' Investment ',

            ]);
        Permission::create([
                'name' => 'investments.show',
                'description' => 'Can view details of each Investment',
                'front_name' => 'View Investment details',
                        'model' => ' Investment ',

                ]);    
        Permission::create([
                    'name' => 'investments.create',
                    'description' => 'User can view create form and add new Investment',
                    'front_name' => 'Create a new Investment',
                            'model' => ' Investment ',

                    ]);      
                    
        

                                Permission::create([
                        'name' => 'investments.delete',
                        'description' => 'User can delete a Investment',
                        'front_name' => 'Delete Investment',
                                'model' => ' Investment ',

                        ]);

                        Permission::create([
                            'name' => 'investments.restore',
                            'description' => 'User can restore a Investment',
                            'front_name' => 'Restore Investment',
                                    'model' => ' Investment ',

                            ]);


    }
}