<?php

namespace Database\Seeders;
use App\Member;
use App\Donation;
use App\Investment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(2)->create();
        //\App\Member::factory(2)->create();
        //  $this->call(UsersTableSeeder::class);
    //$this->call(ProductsTableSeeder::class);
    $this->call(RolesTableSeeder::class);
    $this->call(MemberTableSeeder::class);
    $this->call(ProjectPermissionsSeeder::class);
    $this->call(DonationPermissionsSeeder::class);
    $this->call(TicketPermissionsSeeder::class);
    $this->call(InvestmentPermissionsSeeder::class);
    $this->call(MemberPermissionsSeeder::class);
    $this->call(AccountPermissionsSeeder::class);
    $this->call(UserPermissionsSeeder::class);
    $this->call(CategoryExpensePermissionsSeeder::class);
    Member::factory(50)->create();
   // Donation::factory(50)->create();
    //Investment::factory(20)->create();
    $this->call(PermissionsTableSeeder::class);
    $this->call(DonationsSeeder::class);
    $this->call(ExpensesSeeder::class);

        // factory(App\Investment::class,1500)->create();

    }
}
