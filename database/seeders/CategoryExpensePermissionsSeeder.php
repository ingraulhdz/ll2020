<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\CategoryExpense;

class CategoryExpensePermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

  

        //CategoryExpense Permissions
        
        Permission::create([
        'name' => 'categoryexpenses.index',
        'description' => 'User can view main table with some details',
        'front_name' => 'View categoryexpenses table',
        'model' => 'CategoryExpense',
        ]);
        Permission::create([
            'name' => 'categoryexpenses.edit',
            'description' => 'User can view edit form and update CategoryExpense',
            'front_name' => 'Edit CategoryExpense',
                    'model' => 'CategoryExpense',

            ]);
        Permission::create([
                'name' => 'categoryexpenses.show',
                'description' => 'Can view details of each CategoryExpense',
                'front_name' => 'View CategoryExpense details',
                        'model' => 'CategoryExpense',

                ]);    
        Permission::create([
                    'name' => 'categoryexpenses.create',
                    'description' => 'User can view create form and add new CategoryExpense',
                    'front_name' => 'Create a new CategoryExpense',
                            'model' => 'CategoryExpense',

                    ]);      
                    
        

                                Permission::create([
                        'name' => 'categoryexpenses.delete',
                        'description' => 'User can delete a CategoryExpense',
                        'front_name' => 'Delete CategoryExpense',
                                'model' => 'CategoryExpense',

                        ]);

                        Permission::create([
                            'name' => 'categoryexpenses.restore',
                            'description' => 'User can restore a CategoryExpense',
                            'front_name' => 'Restore CategoryExpense',
                                    'model' => 'CategoryExpense',

                            ]);


    }
}