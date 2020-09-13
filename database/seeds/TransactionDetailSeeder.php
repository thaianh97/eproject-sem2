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
                'guide_name' => 'Mai Quang Hiếu',
                'start' => Carbon::now()->addDays(-6)->format('Y-m-d '),
                'end' => Carbon::now()->addDays(-3)->format('Y-m-d '),
                'rate_stars'=>5,
                'review'=> 'ok',
                'cost' => 1000000,
                'status' => 5,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d '),
                'updated_at' => Carbon::now()->addDays(-3)->format('Y-m-d '),
            ],
            [
                'id' => 2,
                'transaction_id' => 2,
                'guide_id' => 1,
                'guide_name' => 'Mai Quang Hiếu',
                'start' => Carbon::now()->addDays(0)->format('Y-m-d '),
                'end' => Carbon::now()->addDays(2)->format('Y-m-d '),
                'rate_stars'=>5,
                'review'=> '',
                'cost' => 1000000,
                'status' => 3,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d '),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d '),
            ],
            [
                'id' => 3,
                'transaction_id' => 3,
                'guide_id' => 1,
                'guide_name' => 'Mai Quang Hiếu',
                'start' => Carbon::now()->addDays(4)->format('Y-m-d '),
                'end' => Carbon::now()->addDays(5)->format('Y-m-d '),
                'rate_stars'=>0,
                'review'=> '',
                'cost' => 1000000,
                'status' => 3,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d '),
                'updated_at' => Carbon::now()->addDays(-6)->format('Y-m-d '),
            ],
            [
                'id' => 4,
                'transaction_id' => 4,
                'guide_id' => 1,
                'guide_name' => 'Mai Quang Hiếu',
                'start' => Carbon::now()->addDays(10)->format('Y-m-d '),
                'end' => Carbon::now()->addDays(12)->format('Y-m-d '),
                'rate_stars'=>0,
                'review'=> '',
                'cost' => 1000000,
                'status' => 2,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d '),
                'updated_at' => Carbon::now()->addDays(-6)->format('Y-m-d '),
            ],
            [
                'id' => 5,
                'transaction_id' => 5,
                'guide_id' => 1,
                'guide_name' => 'Mai Quang Hiếu',
                'start' => Carbon::now()->addDays(13)->format('Y-m-d '),
                'end' => Carbon::now()->addDays(15)->format('Y-m-d '),
                'rate_stars'=>0,
                'review'=> '',
                'cost' => 1000000,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d '),
                'updated_at' => Carbon::now()->addDays(-6)->format('Y-m-d '),
            ],
            [
                'id' => 6,
                'transaction_id' => 6,
                'guide_id' => 1,
                'guide_name' => 'Mai Quang Hiếu',
                'start' => Carbon::now()->addDays(16)->format('Y-m-d '),
                'end' =>Carbon::now()->addDays(18)->format('Y-m-d '),
                'rate_stars'=>5,
                'review'=> 'ok',
                'cost' => 1000000,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d '),
                'updated_at' => Carbon::now()->addDays(-6)->format('Y-m-d '),
            ],
            [
                'id' => 7,
                'transaction_id' => 6,
                'guide_id' => 1,
                'guide_name' => 'Mai Quang Hiếu',
                'start' => Carbon::now()->addDays(7)->format('Y-m-d '),
                'end' =>Carbon::now()->addDays(8)->format('Y-m-d '),
                'rate_stars'=>0,
                'review'=> '',
                'cost' => 1000000,
                'status' => 6,
                'created_at' => Carbon::now()->addDays(-10)->format('Y-m-d '),
                'updated_at' => Carbon::now()->addDays(-9)->format('Y-m-d '),
            ],

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
