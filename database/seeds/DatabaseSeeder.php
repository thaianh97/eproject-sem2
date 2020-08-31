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
        $this->call(TourGuideAreaSeeder::class);
        $this->call(TourGuideImageSeeder::class);
        $this->call(TourGuideSeeder::class);
        $this->call(NewTourGuideResgisterSeeder::class);
    }
}
