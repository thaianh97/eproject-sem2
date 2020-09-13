<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
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
        DB::table('accounts')->truncate();
        DB::table('accounts')->insert([
            [
                'id' => 1,
                'username' => 'LeHoang',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 1,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'username' => 'ThaiAnh',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 1,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'username' => 'HoangTruong',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 1,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'username' => 'LuuHuy',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 1,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 5,
                'username' => 'MaiHieu',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 6,
                'username' => 'phamtruong97',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 7,
                'username' => 'ChinhDang97',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 8,
                'username' => 'NhungNguyen94',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 9,
                'username' => 'HoaPham82',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 10,
                'username' => 'VianNg_96',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 11,
                'username' => '95',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 12,
                'username' => 'Phambuffalo',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 13,
                'username' => 'QingVan_98',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 14,
                'username' => 'TienDung201',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 15,
                'username' => 'Tieneastern',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 3,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 16,
                'username' => 'HungPham96',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 3,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 17,
                'username' => 'HungDo85',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 3,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 18,
                'username' => 'ThaiHoang93',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 3,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 19,
                'username' => 'HungMai92',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 3,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 20,
                'username' => 'ChingDang97',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 3,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 21,
                'username' => 'nht_99',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 22,
                'username' => 'MXDung202',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 23,
                'username' => 'HangPhung98',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 24,
                'username' => 'TranHH_94',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 25,
                'username' => 'PhongLe97',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 26,
                'username' => 'HoangSon96',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 27,
                'username' => 'ThanhLuyen96',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 28,
                'username' => 'KhanhLuu97',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 29,
                'username' => 'LyHoang97',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 30,
                'username' => 'VanTien_92',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 31,
                'username' => 'PhongStorm',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 32,
                'username' => 'HuyenKH91',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 33,
                'username' => 'Mixigaming',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 34,
                'username' => 'TienHa91',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 35,
                'username' => 'Ninhpretty95',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 36,
                'username' => 'HuyQuangLe99',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 37,
                'username' => 'HaiTT_87',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 38,
                'username' => 'HuongPearl98',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 39,
                'username' => 'MaiDuc97',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 40,
                'username' => 'QuangDuong98',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 41,
                'username' => 'HunggoldenMac89',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 42,
                'username' => 'CuongPham93',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 43,
                'username' => 'MyLinh99',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 44,
                'username' => 'VietAnhTall',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 45,
                'username' => 'TranTuan2k',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 46,
                'username' => 'DuongTH95',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 47,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 48,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 49,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 50,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 51,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 52,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 53,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 54,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 55,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 56,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 57,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 58,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 59,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 60,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 61,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 62,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 63,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 64,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 65,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 66,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 67,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 68,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 69,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 70,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 71,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 72,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 73,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 74,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 75,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 76,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 77,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 78,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 79,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 80,
                'username' => '',
                'password_hash' => '40f496d46072d24556ff15ad12636ab2',
                'salt' => 'rrMpDD',
                'role' => 2,
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
