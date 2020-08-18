<?php

use Illuminate\Database\Seeder;

class HdvSeeding extends Seeder
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
                'full_name'=>'Mai Quang Hiếu',
                'age'=>'23',
                'price'=>1000000,
                'phone'=>'0979691998',
                'email'=>'maiquanghieu6998@gmail.com',
                'description'=>'Tự tin, thân thiện, vui vẻ. Có thể dẫn tour bằng tiếng Anh',
                'area_id'=>'1',
                'card'=>true,
                'mc_gala_dinner'=>true,
                'team_building'=>true,
                'start_time'=>'',
                'end_time'=>'',
                'status'=>1,
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id'=>2,
                'full_name'=>'Phạm Quang Trường',
                'age'=>'24',
                'price'=>'800000',
                'phone'=>'0912577620',
                'email'=>'truongpham97@gmail.com',
                'description'=>'trầm lắng, thích đọc sách và tìm hiểu nhiều nền văn hoá cũng như lịch sử',
                'area_id'=>1,
                'card'=>true,
                'mc_gala_dinner'=>false,
                'team_building'=>false,
                'start_time'=>'',
                'end_time'=>'',
                'status'=>1,
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id'=>3,
                'full_name'=>'Đặng Quang Chính',
                'age'=>'24',
                'price'=>1000000,
                'phone'=>'0912511440',
                'email'=>'chinhdangquang777@gmail.com',
                'description'=>'Năng nổ, hiểu biết nhiều về ẩm thực',
                'area_id'=>1,
                'card'=>true,
                'mc_gala_dinner'=>true,
                'team_building'=>true,
                'start_time'=>'',
                'end_time'=>'',
                'status'=>'',
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id'=>4,
                'full_name'=>'Nguyễn Hồng Nhung',
                'age'=>'26',
                'price'=>2000000,
                'phone'=>'0347513690',
                'email'=>'nhungnguyen494@gmail.com',
                'description'=>'5 năm kinh nghiệm dẫn tour',
                'area_id'=>32,
                'card'=>true,
                'mc_gala_dinner'=>true,
                'team_building'=>true,
                'start_time'=>'',
                'end_time'=>'',
                'status'=>2,
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id'=>5,
                'full_name'=>'Phạm Thị Hoa',
                'age'=>'38',
                'price'=>800000,
                'phone'=>'0347866439',
                'email'=>'phamhoathi_tourguider@gmail.com',
                'description'=>'Chuyên dẫn đoàn xem hội Lim, có thể hát quan họ',
                'area_id'=>4,
                'card'=>true,
                'mc_gala_dinner'=>false,
                'team_building'=>false,
                'start_time'=>'',
                'end_time'=>'',
                'status'=>1,
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id'=>6,
                'full_name'=>'Nguyễn Thị Vân Anh',
                'age'=>'24',
                'price'=>1500000,
                'phone'=>'0979544726',
                'email'=>'vivianng@gmail.com',
                'description'=>'Là người vui vẻ. Có thể dẫn tour người nước ngoài với tiếng Anh và tiếng Pháp',
                'area_id'=>1,
                'card'=>true,
                'mc_gala_dinner'=>true,
                'team_building'=>true,
                'start_time'=>'',
                'end_time'=>'',
                'status'=>1,
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id'=>7,
                'full_name'=>'Phạm Minh Hiếu',
                'age'=>'25',
                'price'=>'1000000',
                'phone'=>'0905422944',
                'email'=>'hieu_pham_95@gmail.com',
                'description'=>'là người năng nổ, nhiệt tình. Có nhiều kinh nghiệm dẫn đoàn công ty tổ chức team building',
                'area_id'=>25,
                'card'=>true,
                'mc_gala_dinner'=>true,
                'team_building'=>true,
                'start_time'=>'',
                'end_time'=>'',
                'status'=>1,
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id'=>8,
                'full_name'=>'Phạm Châu Anh',
                'age'=>'24',
                'price'=>'1200000',
                'phone'=>'0949511230',
                'email'=>'chauanhanh@gmail.com',
                'description'=>'Tự tin, chuyên dẫn tour người nước ngoài với tiếng Anh, Đức, Pháp',
                'area_id'=>25,
                'card'=>true,
                'mc_gala_dinner'=>true,
                'team_building'=>true,
                'start_time'=>'',
                'end_time'=>'',
                'status'=>1,
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id'=>9,
                'full_name'=>'Nguyễn Quỳnh Vân',
                'age'=>'23',
                'price'=>800000,
                'phone'=>'0849997778',
                'email'=>'quingvian98@gmail.com',
                'description'=>'Dẫn tour Hà Nội, thế mạnh là tiếng Anh',
                'area_id'=>1,
                'card'=>true,
                'mc_gala_dinner'=>true,
                'team_building'=>true,
                'start_time'=>'',
                'end_time'=>'',
                'status'=>1,
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id'=>10,
                'full_name'=>'Trần Tiến Dụng',
                'age'=>'19',
                'price'=>500000,
                'phone'=>'0969121250',
                'email'=>'dungtt_tg@gmail.com',
                'description'=>'Hướng dẫn viên địa phương. Có thể nói tiếng Anh ',
                'area_id'=>18,
                'card'=>false,
                'mc_gala_dinner'=>true,
                'team_building'=>true,
                'start_time'=>'',
                'end_time'=>'',
                'status'=>1,
                'created_at'=>Carbon::now()->addDays(-7)->format( 'Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
