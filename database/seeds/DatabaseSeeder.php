<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PaymentMethodsTableSeeder::class);
        $this->call(AccountsTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(BudgetsTableSeeder::class);
        $this->call(AccountBudgetTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
        
    }
}
