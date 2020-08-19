<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('admins')->truncate();
        DB::table('admins')->insert([
            [
                'id' => 1,
                'account_id' => 1,
                'full_name' => 'Lê Minh Hoàng',
                'phone' => '0966601159',
                'email' => 'leminhhoang10920@gmail.com',
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 5,
                'account_id' => 5,
                'full_name' => 'Mai Quang Hiếu',
                'phone' => '0979691998',
                'email' => 'maiquanghieu6998@gmail.com',
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'account_id' => 2,
                'full_name' => 'Đỗ Thái Anh',
                'phone' => '0914366644',
                'email' => ' thaianhdo280497@gmail.com',
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'account_id' => 3,
                'full_name' => 'Hoàng Huy Trường',
                'phone' => '0343899371',
                'email' => 'truonghoangfpt@gmail.com',
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'account_id' => 4,
                'full_name' => 'Lưu Đức Huy',
                'phone' => '0333 237 860',
                'email' => 'luuhuyulei@gmail.com',
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
