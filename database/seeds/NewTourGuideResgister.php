<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class NewTourGuideResgister extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('new_tour_guide_registers')->truncate();
        DB::table('new_tour_guide_registers')->insert([
            [
                'id'=> 1,
                'userName'=> 'truongprond97',
                'full_name' => 'Mai Quang Hiếu',
                'year_of_birth' => 1998,
                'phone' => '0979691998',
                'email' => 'maiquanghieu6998@gmail.com',
                'description' => 'Tự tin, thân thiện, vui vẻ. Có thể dẫn tour bằng tiếng Anh',
                'avatar' => '',
                'card' => true,
                'mc_gala_dinner' => true,
                'team_building' => true,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id'=> 2,
                'userName'=> 'truongprond98',
                'full_name' => 'Phạm Quang Trường',
                'year_of_birth' => 1996,
                'phone' => '0912577620',
                'email' => 'truongpham97@gmail.com',
                'description' => 'trầm lắng, thích đọc sách và tìm hiểu nhiều nền văn hoá cũng như lịch sử',
                'avatar' => '',
                'card' => true,
                'mc_gala_dinner' => false,
                'team_building' => false,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id'=> 3,
                'userName'=> 'truongprond99',
                'full_name' => 'Đặng Quang Chính',
                'year_of_birth' => 1996,
                'phone' => '0912511440',
                'email' => 'chinhdangquang777@gmail.com',
                'description' => 'Năng nổ, hiểu biết nhiều về ẩm thực',
                'avatar' => '',
                'card' => true,
                'mc_gala_dinner' => true,
                'team_building' => true,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id'=> 4,
                'userName'=> 'truongprond96',
                'full_name' => 'Đặng Quang Chính',
                'year_of_birth' => 1996,
                'phone' => '0912511440',
                'email' => 'chinhdangquang777@gmail.com',
                'description' => 'Năng nổ, hiểu biết nhiều về ẩm thực',
                'avatar' => '',
                'card' => true,
                'mc_gala_dinner' => true,
                'team_building' => true,
                'status' => 0,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ]
        ]);

    }
}
