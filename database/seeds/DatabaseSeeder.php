<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $location =array('Admin','Editor','User');
        for ($i = 0; $i <= 2; $i++ )
        {
          
            DB::table('roles')->insert([
                'id' => $i+1,
                'name' => $location[$i],
            ]);
        }
       
        DB::table('admins')->insert([
            'name'=>'TienMTA',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('12345678'),
            'level'=>1,

        ]);
      
        DB::table('admins')->insert([
            'name'=>'users',
            'email'=>'user@gmail.com',
            'password'=>bcrypt('12345678'),
            'level'=>2,
        ]);

        
        //khuyến mại
        DB::table('promotion')->delete();
        DB::table('promotion')->insert([
            'image'=>'banner-1.png',
            'title'=>'CHƯƠNG TRÌNH KHÁCH HÀNG THÂN THIẾT',
            'content'=>'Dành cho những khách hàng mua và sử dụng sản phẩm của Vedevi. Hãy tích lũy điểm bằng mã thẻ cào trên mỗi sản phẩm để nhận các quyền lợi hấp dẫn.',
            'link'=>'http://bit.ly/2gqZ9r4',
            'hotline'=>'1800 55 6889',
            
        ]);


        DB::table('catepromotion')->delete();
        DB::table('catepromotion')->insert([
            [
            'id'=>1,
            'email'=>'thanhvien@gmail.com',
            ],
            [
            'id'=>2,
            'email'=>'thanhvien2@gmail.com',
            ],
        ]);

        DB::table('expert')->delete();
        DB::table('expert')->insert([
            [
            'id'=>1,
            'image'=>'lady-doctor.png',
            ],
          
        ]);


        DB::table('users')->delete();
        DB::table('users')->insert([
            ['id'=>1,'name'=>'Nguyễn văn A','phone'=>'0963158338','address'=>'Hà Nội','email'=>'user1@gmail.com','password'=>bcrypt('12345678')],
            ['id'=>2,'name'=>'Nguyễn văn B','phone'=>'0342888666','address'=>'Hà Nam','email'=>'user2@gmail.com','password'=>bcrypt('12345678')],
            ['id'=>3,'name'=>'Nguyễn văn C','phone'=>'0975370097','address'=>'Bắc Ninh','email'=>'user3@gmail.com','password'=>bcrypt('12345678')],
          
        ]);


        
        DB::table('advisory')->delete();
        DB::table('advisory')->insert([
            ['id'=>1,'name'=>'Nguyễn Hữu TIến','email'=>'tiennguyenhuu@gmail.com','question'=>'Chào chuyên gia, em năm nay 25 tuổi, làm công việc thiết kế đồ họa. Công việc của em là thường xuyên tiếp xúc với màn hình vi tính (khoảng 10h/ ngày), lại phải ngồi trong môi trường máy lạnh nên da bị khô. Em nghe nói, ngồi máy lạnh và nhìn màn hình vi tính nhiều sẽ làm cho da xấu đi, nhanh bị lão hóa. Cho em hỏi, ở độ tuổi của em có nên dùng kem chống lão hóa da không? Em cảm ơn','status'=>2],
            ['id'=>2,'name'=>'Nguyễn Hữu Toàn','email'=>'toannguyenhuu@gmail.com','question'=>'Chào chuyên gia, Tôi năm nay 28 tuổi, 2 tháng trước tôi thường thức khuya để làm việc, cũng từ đó tôi có thói quen ăn đêm. Hiện tại tôi đã bị tăng cần và mặc dù đã tranh thủ đi ngủ sớm nhưng hầu như đêm nào tôi cũng trằn trọc đến 2, 3 giờ sáng mới ngủ được. Tôi xin hỏi có cách nào để tôi có thể ngủ sớm trở lại và không bị mất ngủ nữa được không ạ?','status'=>2],
            ['id'=>3,'name'=>'Nguyễn Hữu Hoàng','email'=>'hoangnguyenhuu@gmail.com','question'=>' Chào chuyên gia, tôi và chồng bị viễn thị, con tôi bị cận thị 6 độ. Tôi thấy trên thị trường hiện nay quảng cáo nhiều loại thuốc bổ mắt có tác dụng giúp sáng mắt, hỗ trợ cải thiện thị lực nhưng không biết là có thể giúp viễn thị và cận thị giảm độ và nhìn rõ hơn không? Xin chuyên gia tư vấn cách chọn thuốc. (Thanh Trúc - Bình Thạnh) ','status'=>2],
          
        ]);

        DB::table('answer')->delete();
        DB::table('answer')->insert([
            ['id'=>1,'answer'=>'Trung Tâm Tư Vấn Y Khoa :
            Chào bạn Phương Trà, với thắc mắc của bạn về việc có nên dùng kem chống lão hóa da ở tuổi 25 không, chúng tôi xin trả lời bạn như sau
            Lão hóa da là một quá trình tự nhiên của cơ thể và diễn ra âm thầm ngay ở những năm tuổi 20. Tuy nhiên, ở độ tuổi này, quá trình lão hóa da diễn ra chậm và thường ít có biểu hiện ra ngoài. Nhưng đến những năm sau tuổi 30 tình trạng da nhăn, khô, sạm sẽ hiện rõ vì lúc này cấu trúc nền của da đã bị hư tổn, các protein dạng sợi (elastin, laminin, collagen, fibronectin) và phân tử giữ nước dưỡng ẩm proteoglycans bị hao hụt, mất tính liên kết khiến da mất đi sự săn chắc, mịn màng.
            Bạn năm nay 25 tuổi, xuất hiện tình trạng khô da, điều này khởi nguồn cho quá trĩnh lão hóa da. Nguyên nhân là do lão hóa tự nhiên của cơ thể, song song đó lại chịu sự tác động của yếu tố bên ngoài, đặc biệt là làm việc trong môi trường máy lạnh và tiếp xúc nhiều với màn hình vi tính.
            Máy lạnh làm giảm nhiệt độ và độ ẩm không khí xuống thấp khiến cho da mất đi một lượng nước cần thiết, không đủ duy trì độ ẩm dẫn đến khô da. Trong khi đó, lượng điện tích sản sinh từ máy tính như một chất xúc tác khiến da hấp thụ nhiều bụi bẩn trong không khí có thể làm bít lỗ chân gây mụn, viêm, cản trở sự hấp thu các dưỡng chất từ bên ngoài, làm ảnh hưởng xấu đến da. Hai yếu tố tác động đồng thời lên da sẽ đẩy nhanh quá trình lão hóa da, khiến cho da bị khô, mau chóng xuất hiện nếp nhăn nếu không được chăm sóc tốt.
            Trường hợp của bạn có thể sử dụng các loại kem chống lão hóa da, tốt hơn nếu có bổ sung thêm thành phần dưỡng ẩm để giúp cân bằng độ ẩm cho da, cải thiện tình trạng da khô, thiếu nước, làm chậm quá trình lão hóa da.Tuy nhiên, cần lưu ý lựa chọn các sản phẩm chứa thành phần thiên nhiên và được sản xuất bởi những thương hiệu mỹ phẩm uy tín. Đồng thời, nên mua ở những trung tâm thương mại lớn, những cửa hàng mỹ phẩm đáng tin cậy để tránh mua phải hàng nhái, hàng kém chất lượng, vừa tốn tiền lại gây hại da, đẩy mạnh quá trình lão hóa da.
            Bên cạnh việc dưỡng da bên ngoài nhờ các loại mỹ phẩm, ở tuổi này bạn cũng nên chủ động chăm sóc và nuôi dưỡng da khỏe mạnh từ sâu bên trong nhờ các sản phẩm được tinh chiết hoàn toàn từ thiên nhiên có tác dụng bảo vệ và tái tạo cấu trúc nền của da – yếu tố quyết định sự khỏe mạnh, căng sáng và mềm mịn của da. Khi cấu trúc nền của da khỏe mạnh, các thành phần là elastin, laminin, collagen, fibronectin và proteoglycans sẽ luôn được duy trì tốt, giúp da căng sáng, mềm mịn và tươi trẻ theo thời gian.
            Ngoài ra, bạn cũng cần hạn chế thức khuya; quan tâm đến chế độ dinh dưỡng cân bằng, đủ chất; thường xuyên vận động để kích thích khả năng tuần hoàn máu, trao đổi chất trong cơ thể… là những điều hết sức cần thiết cho sức khỏe và sắc đẹp của phụ nữ.','advisory_id'=>1],
            ['id'=>2,'answer'=>'Trung Tâm Tư Vấn Y Khoa:
            Chào bạn,
            Rất cảm ơn bạn đã gửi câu hỏi đến Trung tâm Tư vấn Y khoa.
            Phụ nữ thường bị mất ngủ nhiều hơn nam giới, nguyên nhân mất ngủ ở phụ nữ chủ yếu là do stress từ công việc và áp lực cuộc sống như chăm sóc con cái, gia đình. Các tác nhân ngoại cảnh này đã kích thích gốc tự do tăng sinh nhiều hơn trong quá trình chuyển hóa ở não, gây tổn thương thành mạch máu, tạo nên các mảng xơ vữa và huyết khối, làm hẹp lòng mạch máu, cản trở máu lưu thông lên não, gây thiếu máu não. Tình trạng này làm tế bào thần kinh thiếu năng lượng để hoạt động khiến các truyền dẫn thần kinh gặp trục trặc gây rối loạn hoạt động cơ thể, điển hình là chứng mất ngủ.
            Mất ngủ khiến bạn buổi tối thường xuyên phải thức khuya bất đắc dĩ. Một số tác hại của thức khuya ở phụ nữ như mệt mỏi, xấu da, tăng cân, suy giảm trí nhớ… Đặc biệt, mất ngủ kéo dài còn làm tăng nguy cơ đột quỵ. Tình trạng bạn bị tăng cân là một trong những dấu hiệu cho thấy sức khỏe toàn thân đang bị ảnh hưởng bởi việc mất ngủ.
            Để cải thiện tình trạng mất ngủ, bạn nên chủ động thay đổi lối sống. 
            Chế độ dinh dưỡng: hạn chế ăn thức ăn dầu mỡ, uống rượu bia, chất kích thích chứa nhiều caffeine, tăng cường ăn nhiều rau xanh, cá ngừ, cá hồi, uống đủ 2-3 lít nước mỗi ngày. 
            Tăng cường vận động: mỗi ngày 30 phút để hỗ trợ máu lưu thông lên não tốt hơn. 
            Sắp xếp tốt chế độ làm việc hợp lý: chú trọng cân bằng giữa công việc và nghỉ ngơi, làm 1 giờ có thể đứng dậy vận động 5 phút hoặc ngồi tại chỗ thư giãn.
            Sử dụng các tinh chất thiên nhiên có tác dụng trung hòa gốc tự do để nuôi dưỡng và bảo vệ thành mạch máu não, giúp ngăn chặn và làm chậm hình thành hiện tượng xơ vữa, huyết khối và “mở đường” đưa máu lưu thông lên não dễ dàng hơn, chức năng thần kinh được phục hồi đưa giấc ngủ về nhịp sinh học, từng bước cải thiện mất ngủ hiệu quả.','advisory_id'=>2],
            ['id'=>3,'answer'=>'Trung Tâm Tư Vấn Y Khoa:

            Chào chị,
            
            Cận thị và viễn thị là tình trạng khi mắt không thể tập trung các tia sáng một cách chính xác trên phần nhìn rõ nhất của mắt là hoàng điểm. Đây là những tật khúc xạ nên không có loại thuốc nào có thể có tác dụng giảm độ.
            Để làm chậm tiến trình tăng độ và cải thiện các triệu chứng khi bị các tật khúc xạ như khô, nhức mỏi mắt, chị cần lưu ý đến chế độ dinh dưỡng và sinh hoạt.
            Về sinh hoạt, cần thực hiện theo các khuyến cáo chung dành cho mắt cận thị, viễn thị như:
            Thường xuyên đeo kính và kiểm tra mắt
            Đo độ để điều chỉnh độ kính phù hợp
            Chú ý để đảm bảo đủ ánh sáng khi học tập, làm việc
            Giữ khoảng cách và tư thế hợp lý khi đọc sách và viết (30-40cm).
            Nếu làm việc trên màn hình vi tính, nên để khoảng cách 60cm; dành nhiều thời gian cho mắt nghỉ ngơi.
            Về chế độ dinh dưỡng, nên bổ sung đầy đủ các nhóm chất cần thiết như các loại vitamin A, E, C, chất khoáng có trong rau củ, trái cây tươi, thịt, cá biển, trứng..
            Cần lưu ý, đối với trường hợp cận thị nặng (6 độ trở lên) cần được kiểm tra, soi đáy mắt ít nhất mỗi năm một lần để phát hiện sớm và phòng ngừa nguy cơ bong võng mạc.
            Về các lựa chọn thuốc bổ mắt, chị nên chọn sản phẩm có khả năng chăm sóc và bảo vệ thủy tinh thể và võng mạc, hai bộ phận quan trọng nhất đảm bảo chức năng nhìn của mắt, làm chậm tiến triển của cận, viễn thị đồng thời cải thiện các triệu chứng và phòng ngừa bệnh mắt khác.','advisory_id'=>3],
          
        ]);

        DB::table('cate_health')->delete();
        DB::table('cate_health')->insert([
            ['id'=>1,'name'=>'SỨC KHOẺ SINH LÝ NỮ','slug'=>'SUC-KHOE-SINH-LY-NU'],
            ['id'=>2,'name'=>'SỨC KHOẺ SINH LÝ NAM','slug'=>'SUC-KHOE-SINH-LY-NAM'],
            ['id'=>3,'name'=>'LÃO HOÁ DA','slug'=>'LAO-HOA-DA'],
             
        ]); 

        DB::table('health')->delete();
        DB::table('health')->insert([
            ['id'=>1,'title'=>'Làm thế nào để chọn đúng sản phẩm tăng hormone nữ an toàn?',
            'slug'=>'lam-the-nao-de-chon-dung-san-pham-tang-hormone-nu-an-toan',
            'image'=>'melan-cholia-277731-290x185.jpg',
            'summary'=>'Sức khỏe, đời sống chăn gối, nhan sắc rủ nhau xuống dốc khi bạn bắt đầu đặt chân sang cột mốc tuổi 35 - độ tuổi mà các hormone trong cơ thể người phụ nữ  thiếu hụt và xáo trộn. Cách cải thiện tình trạng này chính là  làm thế nào để tăng nồng độ hormone nữ, nhưng không phải ai cũng tìm được phương pháp thực sự hiệu quả và an toàn.',
            'cate_id'=>1,
            ],

            ['id'=>2,'title'=>'P. Leucotomos - Chống nắng từ bên trong và cải thiện da lão hoá cực kỳ hiệu quả',
            'slug'=>'p-Leucotomos-chong-nang-tu-ben-trong-va-cai-thien-da-lao-hoa-cuc-ky-hieu-qua',
            'image'=>'tinh-chat-Polypodium-Leucotomos2-290x185.jpg',
            'summary'=>'Nhiều thế kỷ qua, các thổ dân Châu Mỹ đã sử Polypodium Leucotomos (P. Leucotomos) để cải thiện các vấn đề về da. Đến năm 1970 các nhà khoa học Mỹ đã chứng minh thảo dược P. Leucotomos giúp bảo vệ cấu trúc nền của da trước tác hại của tia cực tím. Đồng thời, P. Leucotomos còn có đặc tính chống oxy hóa, kháng viêm rất tốt, giúp ngăn ngừa quá trình lão hóa da, hạn chế tình trạng da khô, nhăn, sạm giúp da khỏe mạnh, mềm mịn, căng sáng từ bên trong.',
            'cate_id'=>1,
            ],
         
            ['id'=>3,'title'=>'Hệ trục não bộ - tuyến yên - buồng trứng',
            'slug'=>'he-truc-nao-bo-buong-trung',
            'image'=>'htnbtybt-290x185.jpg',
            'summary'=>'Hệ trục "vàng" Não bộ - Tuyến yên - Buồng trứng là hệ trục thần kinh – nội tiết. Hệ trục đóng vai trò quyết định cho sức khỏe, sắc đẹp, ham muốn tình dục lẫn khả năng sinh sản của nữ giới, hệ trục vàng vừa chỉ huy, sản xuất các nội tiết tố (GnRH, FSH, LH, progesterone, estrogen, testosterone...) trong đó, quan trọng nhất là bộ 3 nội tiết tố estrogen, progesterone và testosterone.',
            'cate_id'=>1,
            ],
             

            ['id'=>4,'title'=>'Phát hiện mới giúp nâng cao phong độ nam giới',
            'slug'=>'phat-hien-moi-giup-nang-cao-phong-do-nam-gioi',
            'image'=>'nang-cao-phong-do-nam-gioi1-290x185.jpg',
            'summary'=>'Tác động trực tiếp đến Luteinizing nhằm thúc đẩy quá trình sinh tổng hợp Testosterone nội sinh một cách an toàn, bền vững được xem là giải pháp nâng cao sức khỏe toàn thân, đời sống sinh lý phái mạnh hiệu quả hiện nay.',
            'cate_id'=>2,
            ],
            ['id'=>5,'title'=>'Tăng cường Luteinizing tự nhiên - Tăng cường nội lực nam giới',
            'slug'=>'tang-cuong-luteinzing-tu-nhien-tang-cuong-noi-luc-nam-gioi',
            'image'=>'2411-LH2-290x185.jpg',
            'summary'=>'Sau nhiều công trình nghiên cứu, các nhà khoa học Mỹ đã tìm ra phương thức tăng cường Testosterone nội sinh trong cơ thể nam giới nhanh hơn, bền vững hơn bằng cách phối hợp các thảo dược đặc hiệu có công dụng giúp sản sinh Luteinizing một cách tự nhiên.',
            'cate_id'=>2,
            ],
            ['id'=>6,'title'=>'11 phát hiện thú vị về Testosterone',
            'slug'=>'11-phat-hien-thu-vi-ve-testosterone',
            'image'=>'tang-testosterone-cho-nam-gioi-nhu-the-nao-moi-dung-cach11440066191-290x185.jpg',
            'summary'=>'Vì sao mùa cưới thường vào mùa đông, yêu đơn phương không gây hưng phấn, nguyên nhân gây "lệch pha" nam nữ, điều gì giúp nam giới tăng “bản lĩnh” … là những phát hiện thú vị liên quan đến Testosterone mà bạn có thể chưa biết.',
            'cate_id'=>2,
            ],


            ['id'=>7,'title'=>'Bí quyết giúp làm đẹp da tự nhiên, chăm sóc da toàn diện',
            'slug'=>'bi-quyet-giup-lam-dep-da-tu-nhien-cham-soc-da-toan-dien',
            'image'=>'angela1-290x185.jpg',
            'summary'=>'Làn da đẹp cần có đủ độ ẩm, tính đàn hồi, mặt da láng mịn, căng sáng thể hiện sức khỏe, vẻ đẹp và sự tươi trẻ của người phụ nữ. Vậy bí quyết nào để có được làn da đẹp như thế trong khi tuổi tác, ánh nắng mặt trời và các yếu tố gây hại khác không ngừng tấn công làn da chúng ta mỗi ngày?',
            'cate_id'=>3,
            ],
            ['id'=>8,'title'=>'Hiểu về lão hóa da và phương pháp chống lão hóa da hiệu quả',
            'slug'=>'hieu-ve-lao-hoa-da-va-phuong-phap-chong-lao-hoa-da',
            'image'=>'clhd3-290x185.jpg',
            'summary'=>'Hiểu về lão hóa da và phương pháp chống lão hóa da hiệu quả',
            'cate_id'=>3,
            ],
            ['id'=>9,'title'=>'Cấu trúc nền của da',
            'slug'=>'cau-truc-nen-cua-da',
            'image'=>'cautrucnencuada-290x185.jpg',
            'summary'=>'Cấu trúc nền suy sụp làm da nhăn, khô, sạm, lão hoá nhanh.',
            'cate_id'=>3,
            ],
        ]);




        DB::table('catequestions')->delete();
        DB::table('catequestions')->insert([
            ['id'=>1,'title'=>'Hỏi về Angela Gold','slug'=>'hoi-ve-angela-gold','image'=>'chong-nang-tu-thien-nhien-03_(Copy).jpg'],
            ['id'=>2,'title'=>'Hỏi về Alipas Platinum','slug'=>'hoi-ve-alipas-platinum','image'=>'sam-alipas-platinum-4.jpg'],
            ['id'=>3,'title'=>'Hỏi về Lic','slug'=>'hoi-ve-lic','image'=>'benh nguy hiem 5.jpg'],
            ['id'=>4,'title'=>'Hỏi về Jex Max','slug'=>'hoi-ve-jex-max','image'=>'2744-voi-hoa-cot-song_(2)-290x185.jpg'],
            ['id'=>5,'title'=>'Hỏi về Hewel','slug'=>'hoi-ve-hewel','image'=>'sl1-290x185.jpg'],
    
        ]); 

        DB::table('questions')->delete();
        DB::table('questions')->insert([
            ['id'=>1,'title'=>'Đang dùng collagen thì có thể dùng thêm Sâm Angela Gold không?','slug'=>'dang-dung-collagen-thi-co-the-dung-them-sam-angela-gold-duoc-khong','cate_id'=>1],
            ['id'=>2,'title'=>'Uống Sâm Angela Gold có làm tăng estrogen, tăng nguy cơ ung thư không?','slug'=>'uong-sam-angela-gold-co-lam-tang-estogen-tang-nguy-co-ung-thu-khong','cate_id'=>1],
            ['id'=>3,'title'=>'Vợ bị giảm ham muốn, đau khi quan hệ. Sâm Angela Gold cải thiện vấn đề này cho phụ nữ ra sao?','slug'=>'vo-bi-giam-ham-muon-dau-khi-quan-he-sam-angela-gold-cai-thien-van-de-nay-cho-phu-nu-ra-sao','cate_id'=>1],
            
            ['id'=>4,'title'=>'Cơ thể bình thường, có thể dùng Sâm Alipas Platinum để duy trì sức khỏe và sinh lý không?','slug'=>'co-the-binh-thuong-co-the-dung-sam-alipas-platinum-de-duy-tri-suc-khoe-sinh-ly-khong','cate_id'=>2],
            ['id'=>5,'title'=>'Nam giới ngoài tuổi 50, dùng Sâm Alipas Platinum có an toàn với người có tuổi?','slug'=>'nam-gioi-ngoai-tuoi-50-dung-sam-alipas-platinum-co-an-toan-voi-nguoi-co-tuoi','cate_id'=>2],
            ['id'=>6,'title'=>'Nam giới bị huyết áp cao, tiểu đường, bệnh tim mạch… dùng Sâm Alipas Platinum được không?','slug'=>'nam-gioi-bi-huyet-ap-cao-tieu-duong-benh-tim-mach-dung-sam-alipas-duoc-khong','cate_id'=>2],

            ['id'=>7,'title'=>'Không cần giảm cân, chỉ muốn giữ cân thì uống LIC có được không?','slug'=>'khong-can-giam-can-chi-muon-giu-can-thi-uong-lic-duoc-khong','cate_id'=>3],
            ['id'=>8,'title'=>'Bị cao huyết áp và tiểu đường có dùng được LIC không?','slug'=>'bi-cao-huyet-ap-va-tieu-duong-co-dung-duoc-lic-khong','cate_id'=>3],
            ['id'=>9,'title'=>'LIC có ảnh hưởng gì đến việc sinh con không? Ngưng dùng trong bao lâu thì có thể có con?','slug'=>'lic-co-anh-huong-gi-den-viec-sinh-con-khong-ngung-dung-trong-bao-lau-thi-co-the-co-con','cate_id'=>3],

            ['id'=>10,'title'=>'Jex Max có hỗ trợ cải thiện bệnh xương khớp cho người bị đau nhức khớp kinh niên không?','slug'=>'jex-max-co-ho-tro-cai-thien-benh-xuong-khop-cho-nguoi-bi-dau-nhuc-khop-kinh-nien-khong','cate_id'=>4],
            ['id'=>11,'title'=>'Dùng Jex Max thường xuyên có an toàn với người trung niên, cao tuổi?','slug'=>'dung-lex-max-thuong-xuyen-co-an-toan-voi-nguoi-trung-nien-cao-tuoi','cate_id'=>4],
            ['id'=>12,'title'=>'Jex Max có dùng được cho người đau bao tử, mắc bệnh huyết áp, gan, thận...?','slug'=>'jex-max-co-dung-duoc-cho-nguoi-dau-bao-tu-mac-benh-huyet-ap-gan-than','cate_id'=>4],


            ['id'=>13,'title'=>'Bị viêm gan B mãn tính, nên uống Hewel liều lượng bao nhiêu để phòng xơ gan hiệu quả?','slug'=>'bi-viem-gan-b-man-tinh-nen-uong-hewel-lieu-luong-bao-nhieu-de-phong-xo-gan-hieu-qua','cate_id'=>5],
            ['id'=>14,'title'=>'Sử dụng Hewel có giúp cải thiện gan nhiễm mỡ hiệu quả không?','slug'=>'su-dung-hewel-co-giup-cai-thien-gan-nhiem-mo-hieu-qua-khong','cate_id'=>5],
            ['id'=>15,'title'=>'Có thể dùng Hewel để giải độc và ngăn ngừa ung thư từ thực phẩm bẩn được không?','slug'=>'co-the-dung-hewel-de-giai-doc-va-ngan-ngua-ung-thu-tu-thuc-pham-duoc-khong','cate_id'=>5],
        ]); 







    }




}
