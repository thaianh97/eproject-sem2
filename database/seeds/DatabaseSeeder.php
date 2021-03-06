<?php

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
        // $this->call(UserSeeder::class);
        $this->call(AccountSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(CustomerSeeder::class);

        $this->call(TourGuideImageSeeder::class);
        $this->call(TourGuideSeeder::class);
        $this->call(TourGuideAreaSeeder::class);
        $this->call(NewTourGuideRegisterSeeder::class);
        $this->call(TransactionsSeeder::class);
        $this->call(TransactionDetailSeeder::class);
        $this->call(TransactionDetalStatusSeeder::class);
    }
}
