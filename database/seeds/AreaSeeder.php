<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (env('DB_CONNECTION') == 'mysql') {
            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        }
        DB::table('areas')->truncate();
        DB::table('areas')->insert([
            [
                'id' => 1,
                'province' => 'Hà Nội',
                'region' => 'Bắc',

                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'province' => 'Hà Tây',
                'region' => 'Bắc',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'province' => 'Vĩnh Phúc',
                'region' => 'Bắc',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'province' => 'Bắc Ninh',
                'region' => 'Bắc',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 5,
                'province' => 'Hưng yên',
                'region' => 'Bắc',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 6,
                'province' => 'Hà Nam',
                'region' => 'Bắc',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 7,
                'province' => 'Hải Dương',
                'region' => 'Bắc',

                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 8,
                'province' => 'Hải Phòng',
                'region' => 'Bắc',

                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 9,
                'province' => 'Thái Bình',
                'region' => 'Bắc',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 10,
                'province' => 'Nam Định',
                'region' => 'Bắc',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 11,
                'province' => 'Ninh Bình',
                'region' => 'Bắc',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 12,
                'province' => 'Lai Châu',
                'region' => 'Bắc',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 13,
                'province' => 'Lào Cai',
                'region' => 'Bắc',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 14,
                'province' => 'Yên Bái',
                'region' => 'Bắc',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 15,
                'province' => 'Điện Biên',
                'region' => 'Bắc',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 16,
                'province' => 'Sơn La',
                'region' => 'Bắc',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 17,
                'province' => 'Hoà Bình',
                'region' => 'Bắc',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 18,
                'province' => 'Hà Giang',
                'region' => 'Bắc',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 19,
                'province' => 'Cao Bằng',
                'region' => 'Bắc',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 20,
                'province' => 'Tuyên Quang',
                'region' => 'Bắc',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 21,
                'province' => 'Bắc Kạn',
                'region' => 'Bắc',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 22,
                'province' => 'Lạng Sơn',
                'region' => 'Bắc',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 23,
                'province' => 'Thái Nguyên',
                'region' => 'Bắc',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 24,
                'province' => 'Bắc Giang',
                'region' => 'Bắc',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 25,
                'province' => 'Quảng Ninh',
                "region" => "Bắc",
                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 26,
                'province' => 'Phú Thọ',
                'region' => 'Bắc',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 27,
                'province' => 'Thanh Hoá',
                'region' => 'Trung',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 28,
                'province' => 'Nghệ An',
                'region' => 'Trung',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 29,
                'province' => 'Hà Tĩnh',
                'region' => 'Trung',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 30,
                'province' => 'Quảng Bình',
                'region' => 'Trung',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 31,
                'province' => 'Quảng Trị',
                'region' => 'Trung',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 32,
                'province' => 'Thừa Thiên Huế',
                'region' => 'Trung',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 33,
                'province' => 'Đà Nẵng',
                'region' => 'Trung',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 34,
                'province' => 'Quảng Nam',
                'region' => 'Trung',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 35,
                'province' => 'Quảng Ngãi',
                'region' => 'Trung',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 36,
                'province' => 'Bình Định',
                'region' => 'Trung',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 37,
                'province' => 'Phú Yên',
                'region' => 'Trung',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 38,
                'province' => 'Khánh Hoà',
                'region' => 'Trung',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 39,
                'province' => 'Ninh Thuận',
                'region' => 'Trung',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 40,
                'province' => 'Bình Thuận',
                'region' => 'Trung',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 41,
                'province' => 'Gia Lai',
                'region' => 'Trung',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 42,
                'province' => 'Kon Tum',
                'region' => 'Trung',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 43,
                'province' => 'Đắk Lắk',
                'region' => 'Trung',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 44,
                'province' => 'Đắk Nông',
                'region' => 'Trung',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 45,
                'province' => 'Lâm Đồng',
                'region' => 'Trung',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 46,
                'province' => 'Hồ Chí Minh',
                'region' => 'Nam',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 47,
                'province' => 'Bình Dương',
                'region' => 'Nam',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 48,
                'province' => 'Bình Phước',
                'region' => 'Nam',

                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 49,
                'province' => 'Tây Ninh',
                'region' => 'Nam',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 50,
                'province' => 'Đồng Nai',
                'region' => 'Nam',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 51,
                'province' => 'Bà Rịa Vũng Tàu',
                'region' => 'Nam',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 52,
                'province' => 'Long An',
                'region' => 'Nam',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 53,
                'province' => 'Đồng Tháp',
                'region' => 'Nam',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 54,
                'province' => 'Tiền Giang',
                'region' => 'Nam',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 55,
                'province' => 'Bến Tre',
                'region' => 'Nam',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 56,
                'province' => 'An Giang',
                'region' => 'Nam',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 57,
                'province' => 'Cần Thơ',
                'region' => 'Nam',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 58,
                'province' => 'Vĩnh Long',
                'region' => 'Nam',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 59,
                'province' => 'Trà Vinh',
                'region' => '',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 60,
                'province' => 'Kiên Giang',
                'region' => 'Nam',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 61,
                'province' => 'Hậu Giang',
                'region' => 'Nam',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 62,
                'province' => 'Sóc Trăng',
                'region' => 'Nam',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 63,
                'province' => 'Bạc Liêu',
                'region' => 'Nam',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 64,
                'province' => 'Cà Mau',
                'region' => 'Nam',

                'status' => 1,

                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
        ]);
        if (env('DB_CONNECTION') == 'mysql') {
            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        }
    }
}

