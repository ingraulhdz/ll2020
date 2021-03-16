<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Ticket;

class TicketPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

  

        //Ticket Permissions
        
        Permission::create([
        'name' => 'tickets.index',
        'description' => 'User can view main table with some details',
        'front_name' => 'View tickets table',
        'model' => ' Ticket ',
        ]);
        Permission::create([
            'name' => 'tickets.edit',
            'description' => 'User can view edit form and update Ticket',
            'front_name' => 'Edit Ticket',
                    'model' => ' Ticket ',

            ]);
        Permission::create([
                'name' => 'tickets.show',
                'description' => 'Can view details of each Ticket',
                'front_name' => 'View Ticket details',
                        'model' => ' Ticket ',

                ]);    
        Permission::create([
                    'name' => 'tickets.create',
                    'description' => 'User can view create form and add new Ticket',
                    'front_name' => 'Create a new Ticket',
                            'model' => ' Ticket ',

                    ]);      
                    
        

                                Permission::create([
                        'name' => 'tickets.delete',
                        'description' => 'User can delete a Ticket',
                        'front_name' => 'Delete Ticket',
                                'model' => ' Ticket ',

                        ]);

                        Permission::create([
                            'name' => 'tickets.restore',
                            'description' => 'User can restore a Ticket',
                            'front_name' => 'Restore Ticket',
                                    'model' => ' Ticket ',

                            ]);


    }
}