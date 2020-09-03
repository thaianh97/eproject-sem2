<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('transaction_details')->truncate();
        DB::table('transaction_details')->insert([
            [
                'id' => 1,
                'transaction_id' => 1,
                'guide_id' => 1,
                'guide_name' => 'haong',
                'start' => Carbon::now()->addDays(7)->format('Y-m-d H:i:s'),
                'end' =>Carbon::now()->addDays(10)->format('Y-m-d H:i:s'),
                'rate_stars'=>5,
                'review'=> 'ok',
                'cost' => 1000000,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),

            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
