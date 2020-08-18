<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CustomersSeeding extends Seeder
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
                'id'=>1,
                'account_id'=>77,
                'full_name'=>'Mai Hoàng Trang Linh',
                'phone'=>'0979657180',
                'email'=>'hoangtranglinhmai@gmail.com',
                'address'=>'508 nhà C khu tập thể Xăng Dầu',
                'status'=>1,
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id'=>2,
                'account_id'=>78,
                'full_name'=>'Mai Đức Minh',
                'phone'=>'0939658080',
                'email'=>'ducminhmai@gmail.com',
                'address'=>'508 nhà C khu tập thể Xăng Dầu',
                'status'=>1,
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id'=>3,
                'account_id'=>79,
                'full_name'=>'Nguyễn Chí Quang',
                'phone'=>'0962498948',
                'email'=>'CoangNg@gmail.com',
                'address'=>'số 1 ngõ 37 Thái Thịnh',
                'status'=>1,
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id'=>4,
                'account_id'=>80,
                'full_name'=>'Nguyễn Mai Phương',
                'phone'=>'0967838580',
                'email'=>'phuongtomorrow99@gmail.com',
                'address'=>'241-B7 Nguyễn Công Trứ',
                'status'=>1,
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id'=>5,
                'account_id'=>81,
                'full_name'=>'Cao Mai Linh',
                'phone'=>'0973295949',
                'email'=>'Linhtaller_03@gmail.com',
                'address'=>'số 19 ngõ 24 Trần Đại Nghĩa',
                'status'=>1,
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id'=>6,
                'account_id'=>82,
                'full_name'=>'Cao Thanh Tân',
                'phone'=>'0975398949',
                'email'=>'tan_taller_93@gmail.com',
                'address'=>'số 12 ngõ 7 Trần Quang Diệu',
                'status'=>1,
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
