<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class AreasSeeding extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('areas')->truncate();
        DB::table('areas')->insert([
            [
                'id' => 1,
                'province'=>'Hà Nội',
                'region'=>'Bắc',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'province'=>'Hà Tây',
                'region'=>'Bắc',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'province'=>'Vĩnh Phúc',
                'region'=>'Bắc',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'province'=>'Bắc Ninh',
                'region'=>'Bắc',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 5,
                'province'=>'Hưng yên',
                'region'=>'Bắc',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 6,
                'province'=>'Hà Nam',
                'region'=>'Bắc',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 7,
                'province'=>'Hải Dương',
                'region'=>'Bắc',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 8,
                'province'=>'Hải Phòng',
                'region'=>'Bắc',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 9,
                'province'=>'Thái Bình',
                'region'=>'Bắc',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 10,
                'province'=>'Nam Định',
                'region'=>'Bắc',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 11,
                'province'=>'Ninh Bình',
                'region'=>'Bắc',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 12,
                'province'=>'Lai Châu',
                'region'=>'Bắc',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 13,
                'province'=>'Lào Cai',
                'region'=>'Bắc',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 14,
                'province'=>'Yên Bái',
                'region'=>'Bắc',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 15,
                'province'=>'Điện Biên',
                'region'=>'Bắc',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 16,
                'province'=>'Sơn La',
                'region'=>'Bắc',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 17,
                'province'=>'Hoà Bình',
                'region'=>'Bắc',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 18,
                'province'=>'Hà Giang',
                'region'=>'Bắc',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 19,
                'province'=>'Cao Bằng',
                'region'=>'Bắc',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 20,
                'province'=>'Tuyên Quang',
                'region'=>'Bắc',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 21,
                'province'=>'Bắc Cạn',
                'region'=>'Bắc',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 22,
                'province'=>'Lạng Sơn',
                'region'=>'Bắc',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 23,
                'province'=>'Thái Nguyên',
                'region'=>'Bắc',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 24,
                'province'=>'Bắc Giang',
                'region'=>'Bắc',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 25,
                'province'=>'Quảng Ninh',
                'region'=>'Bắc',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 26,
                'province'=>'Phú Thọ',
                'region'=>'Bắc',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 27,
                'province'=>'Thanh Hoá',
                'region'=>'Trung',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 28,
                'province'=>'Nghệ An',
                'region'=>'Trung',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 29,
                'province'=>'Hà Tĩnh',
                'region'=>'Trung',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 30,
                'province'=>'Quảng Bình',
                'region'=>'Trung',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 31,
                'province'=>'Quảng Trị',
                'region'=>'Trung',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 32,
                'province'=>'Thừa Thiên Huế',
                'region'=>'Trung',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 33,
                'province'=>'Đà Nẵng',
                'region'=>'Trung',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 34,
                'province'=>'Quảng Nam',
                'region'=>'Trung',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 35,
                'province'=>'Quảng Ngãi',
                'region'=>'Trung',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 36,
                'province'=>'Bình Định',
                'region'=>'Trung',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 37,
                'province'=>'Phú Yên',
                'region'=>'Trung',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 38,
                'province'=>'Khánh Hoà',
                'region'=>'Trung',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 39,
                'province'=>'Ninh Thuận',
                'region'=>'Trung',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 40,
                'province'=>'Bình Thuận',
                'region'=>'Trung',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 41,
                'province'=>'Gia Lai',
                'region'=>'Trung',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 42,
                'province'=>'KonTum',
                'region'=>'Trung',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 43,
                'province'=>'Đắk Lắk',
                'region'=>'Trung',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 44,
                'province'=>'Đắk Nông',
                'region'=>'Trung',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 45,
                'province'=>'Lâm Đồng',
                'region'=>'Trung',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 46,
                'province'=>'Hồ Chí Minh',
                'region'=>'Nam',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 47,
                'province'=>'Bình Dương',
                'region'=>'Nam',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 48,
                'province'=>'Bình Phước',
                'region'=>'Nam',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 49,
                'province'=>'Tây Ninh',
                'region'=>'Nam',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 50,
                'province'=>'Đồng Nai',
                'region'=>'Nam',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 51,
                'province'=>'Bà Rịa Vũng Tàu',
                'region'=>'Nam',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 52,
                'province'=>'Long An',
                'region'=>'Nam',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 53,
                'province'=>'Đồng Tháp',
                'region'=>'Nam',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 54,
                'province'=>'Tiền Giang',
                'region'=>'Nam',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 55,
                'province'=>'Bến Tre',
                'region'=>'Nam',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 56,
                'province'=>'An Giang',
                'region'=>'Nam',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 57,
                'province'=>'Cần Thơ',
                'region'=>'Nam',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 58,
                'province'=>'Vĩnh Long',
                'region'=>'Nam',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 59,
                'province'=>'Trà Vinh',
                'region'=>'',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 60,
                'province'=>'Kiên Giang',
                'region'=>'Nam',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 61,
                'province'=>'Hậu Giang',
                'region'=>'Nam',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 62,
                'province'=>'Sóc Trăng',
                'region'=>'Nam',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 63,
                'province'=>'Bạc Liêu',
                'region'=>'Nam',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 64,
                'province'=>'Cà Mau',
                'region'=>'nam',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
