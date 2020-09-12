<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('customers')->truncate();
        DB::table('customers')->insert([
            [
                'id' => 1,
                'account_id' => 15,
                'full_name' => 'Mai Hoàng Trang Linh',
                'phone' => '0979657180',
                "year_of_birth" => 2001,
                'email' => 'hoangtranglinhmai@gmail.com',
                'address' => '508 nhà C khu tập thể Xăng Dầu',
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'account_id' => 16,
                'full_name' => 'Mai Đức Minh',
                'phone' => '0939658080',
                "year_of_birth" => 2001,
                'email' => 'ducminhmai@gmail.com',
                'address' => '508 nhà C khu tập thể Xăng Dầu',
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'account_id' => 17,
                'full_name' => 'Nguyễn Chí Quang',
                'phone' => '0962498948',
                "year_of_birth" => 2001,
                'email' => 'CoangNg@gmail.com',
                'address' => 'số 1 ngõ 37 Thái Thịnh',
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'account_id' => 18,
                'full_name' => 'Nguyễn Mai Phương',
                'phone' => '0967838580',
                "year_of_birth" => 2001,
                'email' => 'phuongtomorrow99@gmail.com',
                'address' => '241-B7 Nguyễn Công Trứ',
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 5,
                'account_id' => 19,
                'full_name' => 'Cao Mai Linh',
                'phone' => '0973295949',
                "year_of_birth" => 2001,
                'email' => 'Linhtaller_03@gmail.com',
                'address' => 'số 19 ngõ 24 Trần Đại Nghĩa',
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 6,
                'account_id' => 20  ,
                'full_name' => 'Cao Thanh Tân',
                'phone' => '0975398949',
                "year_of_birth" => 2001,
                'email' => 'tan_taller_93@gmail.com',
                'address' => 'số 12 ngõ 7 Trần Quang Diệu',
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
