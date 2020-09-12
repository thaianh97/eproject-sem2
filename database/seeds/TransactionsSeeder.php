<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class TransactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('transactions')->truncate();
        DB::table('transactions')->insert([
            [
                'id' => 1,
                'customer_id' => 1,
                'province_id' => 1,
                'party_number' => 10,
                'start' => Carbon::now()->addDays(-6)->format('Y-m-d H:i:s'),
                'end' => Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'total_cost' => 1000000,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),

            ],
            [
                'id' => 2,
                'customer_id' => 2,
                'province_id' => 1,
                'party_number' => 5,
                'start' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'end' => Carbon::now()->addDays(2)->format('Y-m-d H:i:s'),
                'total_cost' => 1000000,
                'status' => 0,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),

            ],
            [
                'id' => 3,
                'customer_id' => 3,
                'province_id' => 1,
                'party_number' => 3,
                'start' => Carbon::now()->addDays(4)->format('Y-m-d H:i:s'),
                'end' => Carbon::now()->addDays(5)->format('Y-m-d H:i:s'),
                'total_cost' => 1000000,
                'status' => 0,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),

            ],
            [
                'id' => 4,
                'customer_id' => 4,
                'province_id' => 1,
                'party_number' => 15,
                'start' => Carbon::now()->addDays(10)->format('Y-m-d H:i:s'),
                'end' => Carbon::now()->addDays(12)->format('Y-m-d H:i:s'),
                'total_cost' => 1000000,
                'status' => 0,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),

            ],
            [
                'id' => 5,
                'customer_id' => 5,
                'province_id' => 1,
                'party_number' => 20,
                'start' => Carbon::now()->addDays(13)->format('Y-m-d H:i:s'),
                'end' => Carbon::now()->addDays(15)->format('Y-m-d H:i:s'),
                'total_cost' => 1000000,
                'status' => 0,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),

            ],
            [
                'id' => 6,
                'customer_id' => 6,
                'province_id' => 1,
                'party_number' => 30,
                'start' => Carbon::now()->addDays(16)->format('Y-m-d H:i:s'),
                'end' => Carbon::now()->addDays(18)->format('Y-m-d H:i:s'),
                'total_cost' => 1000000,
                'status' => 0,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),

            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
