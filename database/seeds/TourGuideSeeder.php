<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class TourGuideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('tour_guides')->truncate();
        DB::table('tour_guides')->insert([
            [
                'id' => 1,
                'account_id' => 5,
                'full_name' => 'Mai Quang Hiếu',
                'year_of_birth' => 1998,
                'gender' => 1,
                'price' => 1000000,
                'phone' => '0979691998',
                'email' => 'maiquanghieu6998@gmail.com',
                'description' => 'Tôi là một hướng dẫn viên yêu thích sự tự do. Tôi yêu vẻ đẹp trên đất nước của mình và thích đọc về lịch sử của chúng. Mọi người nhận xét tôi là người vui tính, hoà đồng nhưng tôi sẽ để điều này cho bạn, là khách hàng của tôi nhận xét và đánh giá nhé. Bạn thăm qua Hoàng Thành Thăng Long? Tôi sẽ dẫn bạn đi thăm quan, tôi sẽ kể cho bạn nghe về cấu trúc xây dựng của toà thành cổ này cũng như lịch sử thăng trầm của nó, bạn có tò mò muốn biết cấm vệ quân được đóng quân ở đâu không? Bạn có biết ngai vàng được đặt ở đâu không? Tôi sẽ kể bạn nghe và bạn sẽ bất ngờ đó. 
                Câu nói yêu thích:"Hãy ra khỏi nhà và khám phá thế giới, con sẽ không biết đôi chân sẽ dẫn con đi đến đâu đâu"',
                'avatar' => 'https://scontent.fsgn2-3.fna.fbcdn.net/v/t1.0-9/65212387_1573684609434260_7029227078172016640_o.jpg?_nc_cat=109&_nc_sid=a4a2d7&_nc_ohc=5ptsb6W9vV0AX9Dnmak&_nc_ht=scontent.fsgn2-3.fna&oh=bb52557dfdc64287829e000745472267&oe=5F8041B3',
                'card' => true,
                'mc_gala_dinner' => true,
                'team_building' => true,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'account_id' => 6,
                'full_name' => 'Phạm Quang Trường',
                'year_of_birth' => 1996,
                'gender' => 1,
                'price' => '800000',
                'phone' => '0912577620',
                'email' => 'truongpham97@gmail.com',
                'description' => 'Là một người trầm lặng, co thể nhiều khách hàng sẽ không thích điều đó ửo một hướng dẫn viên. Nhưng tôi có thể lên kế hoạch một cách tỉ mỉ và tiết kiệm phụ thuộc vào nhu cầu khám phá của bạn. Tôi có xe riêng, tôi sẽ đưa bạn đến bất cứ nơi đâu trong phạm vị tham quan ma bạn muốn, miễn phí. Tôi sẽ kể cho bạn nghe những tích chuyện xa xưa của nơi mà bạn đi qua. Tôi có thể nói tiếng anh và tiếng Nhật, vì vậy hãy mời những người bạn nước ngoài của bạn đi cùng, để họ hiểu và yêu quý Việt Nam hơn nhé! Có tôi bên cạnh bạn, chuyến đi của bạn se có trải nghiệm hoàn hảo hơn.
                Câu nói yêu thích:"Hạnh phúc đến từ từng hơi thở"',
                'avatar' => 'https://scontent.fsgn2-6.fna.fbcdn.net/v/t1.0-9/70426244_2354748698111068_2810908563105382400_o.jpg?_nc_cat=111&_nc_sid=8bfeb9&_nc_ohc=OzlCPgXAt7AAX80mkgU&_nc_ht=scontent.fsgn2-6.fna&oh=4709df9d60715ab366f75c2fd740cf30&oe=5F7E453E',
                'card' => true,
                'mc_gala_dinner' => false,
                'team_building' => false,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'account_id' => 7,
                'full_name' => 'Đặng Quang Chính',
                'year_of_birth' => 1996,
                'gender' => 1,
                'price' => 1000000,
                'phone' => '0912511440',
                'email' => 'chinhdangquang777@gmail.com',
                'description' => 'Bạn mới đến nơi đây, và bạn tò mò về những món đặc sản của vùng. Đừng lo lắng gì cả, vì mọi người gọi tôi là "hướng dẫn ẩm thực". Tôi tự tin có thể kể cho bạn nghe tất cả các ngon của vùng, tôi sẽ cho bạn biết công thức làm món, sự tinh xảo trong từng món ăn. Tinh hoa của người nghệ sĩ chính la cách họ nhận biết sự đặc biệt trong món ăn. Hãy trở thành người nghệ sĩ tài hoa và thêm yêu hơn quê hương mình vì những món đặc sản nhé. Tất nhiên, với vai trò là hướng dẫn viên của bạn, tôi sẽ giúp bạn khám phá tối đa những gì nên biết về vùng đất mà đôi chân bạn đang đưa bạn đi
                Câu nói yêu thích:"Nhắm mắt lại nào, hãy để vị giác biểu diễn cho bạn nghe một bản giao hưởng"',
                'avatar' => 'https://scontent.fsgn2-5.fna.fbcdn.net/v/t1.0-9/12729269_921198837987019_7787292522514287251_n.jpg?_nc_cat=106&_nc_sid=174925&_nc_ohc=WzxZXWQA7PgAX85yIwv&_nc_ht=scontent.fsgn2-5.fna&oh=cad76c199a70d4e2f669f3f3f27e7d91&oe=5F7C7865',
                'card' => true,
                'mc_gala_dinner' => true,
                'team_building' => true,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'account_id' => 8,
                'full_name' => 'Nguyễn Hồng Nhung',
                'year_of_birth' => 1994,
                'gender' => 2,
                'price' => 2000000,
                'phone' => '0347513690',
                'email' => 'nhungnguyen494@gmail.com',
                'description' => 'Tôi đã dẫn tour 5 năm, tôi hiểu rõ bạn, là khách hàng của tôi cần gì và mong muốn gì. Tất nhiên, chỉ cần bạn yêu cầu, trong khả năng của tôi, tôi sẽ đáp ứng để bạn có trải nghiệm chuyến đi tuyệt vời. Với kinh nghiệm của mình, tôi sẽ kết nối tâm hồn bạn với thiên nhiên nơi bạn đang đứng, bạn sẽ thấy rằng quê hương Việt Nam của chúng ta đẹp nhường nào. Tôi gọi Việt Na là mẹ, vì mỗi nơi tôi đi qua, tôi lại nghe tiếng người hát bên tai tôi nhữn câu ca cổ, để tôi nằm mơ về thiên đường mang tên Việt Nam. Hãy đi cùng tôi để hiểu mẹ Việt Nam đẹp thế nào
                Câu nói yêu thích:"Nhà là nơi mà con đang đứng, nhớ về người thân và  con sẽ thấy an toàn"',
                'avatar' => 'https://scontent.fsgn2-5.fna.fbcdn.net/v/t1.0-9/89991055_3328627237153945_5803365123229745152_o.jpg?_nc_cat=102&_nc_sid=0debeb&_nc_ohc=oaDxB_-mR0YAX9JdXsO&_nc_ht=scontent.fsgn2-5.fna&oh=f08f86ebd617d5a7038d6bbcfc9568a3&oe=5F7EE804',
                'card' => true,
                'mc_gala_dinner' => true,
                'team_building' => true,
                'status' => 2,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 5,
                'account_id' => 9,
                'full_name' => 'Phạm Thị Hoa',
                'year_of_birth' => 1992,
                'gender' => 2,
                'price' => 800000,
                'phone' => '0347866439',
                'email' => 'phamhoathi_tourguider@gmail.com',
                'description' => 'Chào mừng bạn đến với Bắc Ninh. Bạn muốn đến hội Lim khi không biết gì và muốn tìm hiểu ư? Đã có tôi ở đây rồi, tôi sẽ dẫn bạn đi tham quan nét đẹp văn hoá đã được tổ chứ văn hoá thế giới công nhận. Kể cho bạn nghe truyền thống lâu đời của lễ hội, những thăng trầm lịch sử mà nó đã phải trải qua. Bạn sẽ được nghe những liệt anh liệt chị hát, được chơi đánh đu, chơi cờ người ...v...v... Bạn cũng sẽ được tôi giowis thiệu những món ăn đặc sản của vùng, tôi sẽ hát cho bạn nghe những làn điệu dân qua quan họ nữa
                Câu nói yêu thích:"Tôi sống như đoá hoa này, toả ngát hương thơm cho đời"',
                'avatar' => 'https://scontent.fsgn2-5.fna.fbcdn.net/v/t1.0-9/67754590_402100847327104_3549867886929510400_o.jpg?_nc_cat=104&_nc_sid=8bfeb9&_nc_ohc=ONRihQFaxXsAX99rap3&_nc_oc=AQkALY5TOjjsJwrIpXbyvaZePK-q1LFJk7JK64BKn4h5jitp4RpR422om4TaZh_HJXA&_nc_ht=scontent.fsgn2-5.fna&oh=f5cb387be655b021022a6f66563982d8&oe=5F7E7B19',
                'card' => true,
                'mc_gala_dinner' => false,
                'team_building' => false,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 6,
                'account_id' => 10,
                'full_name' => 'Nguyễn Thị Vân Anh',
                'year_of_birth' => 1996,
                'gender' => 2,
                'price' => 1500000,
                'phone' => '0979544726',
                'email' => 'vivianng@gmail.com',
                'description' => 'Bạn muốn dẫn người bạn nước ngoài mà mình mới quen đi tham quan nhưng không biết rõ lịch sử và các địa danh? Với 2 năm kinh nghiệm dẫn tour, có thể nói được 3 ngoại ngữ là tiếng Anh, tiếng Đức, tiếng Trung. Tôi tin rằng sẽ đem lại cho bạn và những người bạn của mình có những trải nghiệm thú vị, họ sẽ hiểu hơn về đất nước của chúng ta. Tôi tin rằng tình bạn của bạn và họ sẽ càng thắt chặt, biết đâu được lần sau trơ lại họ sẽ dẫn thêm những người bạn khác. Hãy đến với tôi và cùng nhau tìm hiểu, khám phá Việt Nam nào
                Câu nói yêu thích:"Học ngoại ngữ không bao giờ là muộn"',
                'avatar' => 'https://scontent.fsgn2-3.fna.fbcdn.net/v/t1.0-9/70167885_2553541101535321_2210035736382537728_n.jpg?_nc_cat=107&_nc_sid=e3f864&_nc_ohc=Dj0SletVF3gAX-zqMiM&_nc_ht=scontent.fsgn2-3.fna&oh=ad7e87e5774273fbec41f8658094603f&oe=5F7E08F4',
                'card' => true,
                'mc_gala_dinner' => true,
                'team_building' => true,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 7,
                'account_id' => 11,
                'full_name' => 'Phạm Minh Hiếu',
                'year_of_birth' => 1995,
                'gender' => 1,
                'price' => '1000000',
                'phone' => '0905422944',
                'email' => 'hieu_pham_95@gmail.com',
                'description' => 'Bạn bè luôn nhận xét tôi là người năng nổ nhiệt tình. Tôi cũng sẽ nói điều đó, nhiều năm dẫn tour kết hợp tổ chức teambuilding, tôi biết làm thế nào để khuấy động không khí, để kết nối mọi người. Bạn có một nhóm bạn nhiều người, muốn tìm một nơi để tham quan và vui chơi? Tôi biết chính xác  những gì mà các bạn cần. Hãy tin tưởng tôi, tôi đảm bảo rằng các bạn sẽ có một buổi tối tuyệt vời bên nhau. Nhóm bạn đi chơi, một buổi tối thoả sức vui đùa? Nghe thôi cũng đã thấy hấp dẫn rồi
                Câu nói yêu thích:"Từ bắc đến nam, ai cũng là bạn"',
                'avatar' => 'https://scontent.fsgn2-4.fna.fbcdn.net/v/t31.0-8/20024036_1818780965118276_671834471009222705_o.jpg?_nc_cat=101&_nc_sid=e3f864&_nc_ohc=klbrk3iAYe8AX8O2vRm&_nc_ht=scontent.fsgn2-4.fna&oh=58c06ab5934c743fe8f10411dda28479&oe=5F7C7AC3',
                'card' => true,
                'mc_gala_dinner' => true,
                'team_building' => true,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 8,
                'account_id' => 12,
                'full_name' => 'Phạm Châu Anh',
                'year_of_birth' => 1996,
                'gender' => 2,
                'price' => '1200000',
                'phone' => '0949511230',
                'email' => 'chauanhanh@gmail.com',
                'description' => 'Tôi biết rằng bạn có nhiều người bạn là người nước ngoài và họ muốn khám phá Việt Nam. Hãy đi cùng tôi, tôi sẽ giơi thiệu Việt Nam cho họ cũng như cho bạn thấy một cái nhìn sâu hơn về quê hương của mình. Hiểu biết hơn về văn hoá của đất nướ bạn bè, sẽ khiến cho tình bạn trở nên thân thiết hơn. Biết đâu lần tới, họ sẽ viết thư mời bạn tham quan quê hương họ thì sao. Hãy tin tưởng ở tôi, tôi có thể nói 4 ngoại ngữ: Anh, Pháp, Nhật, Hàn',
                'avatar' => 'https://scontent.fsgn2-3.fna.fbcdn.net/v/t1.0-9/118457653_1906302946178358_7102557544567621949_o.jpg?_nc_cat=107&_nc_sid=e3f864&_nc_ohc=XUPANCY-bNkAX86YxNZ&_nc_ht=scontent.fsgn2-3.fna&oh=a4841a4898a935a2fa4372cfce025f61&oe=5F7FA04A',
                'card' => true,
                'mc_gala_dinner' => true,
                'team_building' => true,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 9,
                'account_id' => 13,
                'full_name' => 'Nguyễn Quỳnh Vân',
                'year_of_birth' => 1997,
                'gender' => 2,
                'price' => 800000,
                'phone' => '0849997778',
                'email' => 'quingvian98@gmail.com',
                'avatar' => 'https://scontent.fsgn2-4.fna.fbcdn.net/v/t1.0-9/45139568_1103790279789958_5475671513820561408_o.jpg?_nc_cat=101&_nc_sid=19026a&_nc_ohc=Tn4A316Jy5cAX9BH_uD&_nc_ht=scontent.fsgn2-4.fna&oh=b0b0f5e72a340c2f08ac220ff8d8bf6e&oe=5F7F4049',
                'description' => 'Đến thăm quan thủ đô nhưng không nắm rõ kiến thức về nơi đây? Tôi ở đây để giúp bạn, tôi sẽ đưa bạn đi qua 36 phố phường nổi tiếng, ngắm nhìn hồ gươm và quảng trường Ba Đình huyền thoại. Tôi sẽ cho bạn xem những di tích cổ mà bạn đã được nghe kể thông qua sách báo. Tôi sẽ chỉ cho bạn những món ăn đặc sản của Hà Nội. Hãy đến với tôi, tôi có thể nói được tiếng Anh nên hãy dẫn theo một người bạn nữa nhé
                Câu nói yêu thích:"Lịch sử được đánh giá qua cái nhìn của hậu thế"',
                'card' => true,
                'mc_gala_dinner' => true,
                'team_building' => true,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 10,
                'account_id' => 14,
                'full_name' => 'Trần Tiến Dụng',
                'year_of_birth' => 2001,
                'gender' => 1,
                'price' => 500000,
                'phone' => '0969121250',
                'email' => 'dungtt_tg@gmail.com',
                'avatar' => 'https://scontent.fsgn2-2.fna.fbcdn.net/v/t1.0-9/118597577_1927325097408535_6723311621299668550_o.jpg?_nc_cat=103&_nc_sid=0debeb&_nc_ohc=iXpxEF6m9zEAX-mb2F7&_nc_ht=scontent.fsgn2-2.fna&oh=bee0b195992e02119c70b42824518992&oe=5F800F1B',
                'description' => 'Đến nơi đây nhưng chưa biết phải tìm hiểu những gì ư? Hãy tìm đến tôi, giá cả thật phải chăng! Tôi sẽ đưa bạn thăm quan hết những gì bạn nên biết về địa phương này. Tôi tin rằng thế mạnh của tôi là sự tự tin và cẩn thận, tôi cũng có thể nói tiếng Anh, hãy giới thiệu người bạn nước ngoài của bạn đi cùng, hãy đi cùng tôi, tôi sẽ giơi thiệu Việt Nam cho họ cũng như cho bạn thấy một cái nhìn sâu hơn về quê hương của mình 
                Câu nói yêu thích:"Nhà ở phía sau lưng, cả thế giới trải dài phía trước',
                'card' => false,
                'mc_gala_dinner' => true,
                'team_building' => true,
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
