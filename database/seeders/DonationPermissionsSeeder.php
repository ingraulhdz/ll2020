<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Donation;

class DonationPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

  

        //Donation Permissions
        
        Permission::create([
        'name' => 'donations.index',
        'description' => 'User can view main table with some details',
        'front_name' => 'View donations table',
        'model' => ' Donation ',
        ]);
        Permission::create([
            'name' => 'donations.edit',
            'description' => 'User can view edit form and update Donation',
            'front_name' => 'Edit Donation',
                    'model' => ' Donation ',

            ]);
        Permission::create([
                'name' => 'donations.show',
                'description' => 'Can view details of each Donation',
                'front_name' => 'View Donation details',
                        'model' => ' Donation ',

                ]);    
        Permission::create([
                    'name' => 'donations.create',
                    'description' => 'User can view create form and add new Donation',
                    'front_name' => 'Create a new Donation',
                            'model' => ' Donation ',

                    ]);      
                    
        

                                Permission::create([
                        'name' => 'donations.delete',
                        'description' => 'User can delete a Donation',
                        'front_name' => 'Delete Donation',
                                'model' => ' Donation ',

                        ]);

                        Permission::create([
                            'name' => 'donations.restore',
                            'description' => 'User can restore a Donation',
                            'front_name' => 'Restore Donation',
                                    'model' => ' Donation ',

                            ]);


    }
}