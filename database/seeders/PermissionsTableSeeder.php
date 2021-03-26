<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

  

        // //tickets
        // Permission::create([
        // 'name' => 'tickets.index',
        // 'description' => 'User can view main table with some details',
        // 'front_name' => 'View tickets table',
        // ]);
        // Permission::create([
        //     'name' => 'tickets.edit',
        //     'description' => 'User can view edit form and update ticket',
        //     'front_name' => 'Edit ticket',
        //     ]);
        // Permission::create([
        //         'name' => 'tickets.show',
        //         'description' => 'Can view details of each ticket',
        //         'front_name' => 'View ticket details',
        //         ]);    
        // Permission::create([
        //             'name' => 'tickets.create',
        //             'description' => 'User can view create form and add new ticket',
        //             'front_name' => 'Create a new ticket',
        //             ]);      
                    
        //             Permission::create([
        //                 'name' => 'tickets.destroy',
        //                 'description' => 'User can delete a ticket',
        //                 'front_name' => 'Delete ticket',
        //                 ]);

        //                         Permission::create([
        //                 'name' => 'tickets.delete',
        //                 'description' => 'User can delete a ticket',
        //                 'front_name' => 'Delete ticket',
        //                 ]);

        //                 Permission::create([
        //                     'name' => 'tickets.restore',
        //                     'description' => 'User can restore a ticket',
        //                     'front_name' => 'Restore ticket',
        //                     ]);


        //Admin

        //$admin->givePermissionTo('products.index');
        //$admin->givePermissionTo(Permission::all());
       
        //Guest

        

         //User Admin
         $user = User::find(1); 
         $user->assignRole('Super-Admin');
         $user = User::find(2); 
         $user->assignRole('Super-Admin');
         $user = User::find(3); 
         $user->assignRole('Super-Admin');
        
        $role = Role::find(3); 

         $role->givePermissionTo([
            'accounts.index',
            'donations.index',
            'members.index',
            'projects.index',
            'tickets.show',
             'accounts.show',
            'donations.show',
            'members.show',
            'projects.show',
            'tickets.show',
             'investments.index',
             'investments.show',

           
            ]);
                  
    }
}