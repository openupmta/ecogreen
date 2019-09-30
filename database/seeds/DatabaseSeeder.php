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

        DB::table('catequestions')->delete();
        DB::table('catequestions')->insert([
            ['id'=>1,'title'=>'Hỏi về Angela Gold','slug'=>'hoi-ve-angela-gold',],
            ['id'=>2,'title'=>'Hỏi về Alipas Platinum','slug'=>'hoi-ve-alipas-platinum',],
            ['id'=>3,'title'=>'Hỏi về Lic','slug'=>'hoi-ve-lic',],
            ['id'=>4,'title'=>'Hỏi về Jex Max','slug'=>'hoi-ve-jex-max',],
            ['id'=>5,'title'=>'Hỏi về Hewel','slug'=>'hoi-ve-hewel',],
    
        ]); 
        
        DB::table('advisory')->delete();
        DB::table('advisory')->insert([
            ['id'=>1,
            'name'=>'Nguyễn Văn TIến',
            'email'=>'tiennguyenhuu@gmail.com',
            'question'=>'Tôi 41 tuổi, gia đình có người ở nước ngoài nên hay gửi cho tôi thuốc collagen uống để làm đẹp da, nhưng tôi cũng bị yếu sinh lý nữa nên muốn dùng thêm Sâm Angela Gold. Tôi đọc thấy giờ Angela Gold cũng có thêm chất làm đẹp da, giảm khô và mờ nhăn, sạm, vậy tôi có cần dùng collagen nữa không hay chỉ cần dùng Sâm Angela Gold là đủ rồi? Cảm ơn. (Trần Công Phụng, Hà Nội)',
            'answer'=>'Chào chị Phụng,

                            Sâm Angela Gold được bổ sung thêm tinh chất mới là P. Leucotomos có tác dụng giúp làn da mềm mịn, căng sáng từ bên trong, làm chậm quá trình lão hóa da đã được kiểm chứng lâm sàng tại Mỹ.
                            
                            Tinh chất P. Leucotomos có tác dụng bảo vệ và làm tăng sinh toàn bộ các sợi protein trong da như elastin, laminin, fibronectin và thành phần giữ ẩm proteoglycan, cải thiện nếp nhăn da sau 2-8 tuần sử dụng. Ngoài ra, P. Leucotomos còn có tác dụng giúp hạn chế hình thành các vết sạm, tăng cường chống nắng tốt hơn gấp 3 lần so với khi không sử dụng và làm giảm 50% hoạt động của các tế bào sắc tố gây sạm da.
                            
                            Cùng với đó, tinh chất Lepidium Meyenii trong Sâm Angela Gold giúp ổn định bộ 3 nội tiết tố nữ quan trọng trong cơ thể người phụ nữ để tăng cường sức khỏe sinh lý và cải thiện các triệu chứng tiền mãn kinh - mãn kinh. Vì vậy, Sâm Angela Gold là giải pháp chăm sóc sức khỏe - sắc đẹp - sinh lý toàn diện từ bên trong.
                            
                            Để tiện lợi và tiết kiệm chi phí, chị chỉ cần dùng Sâm Angela Gold. Các sản phẩm bổ sung collagen chất lượng cũng có thể dùng thêm, nhưng lưu ý nên dùng cách nhau 2 tiếng.',
            'advisory_id'=>1,
            'title'=>'Đang dùng collagen thì có thể dùng thêm Sâm Angela Gold không?',
            'slug'=>'dang-dung-collagen-thi-co-the-dung-them-sam-angela-gold-duoc-khong',
            'image'=>'chong-nang-tu-thien-nhien-03_(Copy).jpg',
            'status'=>2],
            ['id'=>2,
            'name'=>'Nguyễn Văn TIến',
            'email'=>'tiennguyenhuu@gmail.com',
            'question'=>'Tôi đang dùng Sâm Angela Gold. Xin hỏi Sâm Angela Gold có làm tăng estrogen trong cơ thể hay không? Tôi hơi lo vì đọc sách báo thấy nói nếu bị dư estrogen thì sẽ bị huyết khối và có thể tăng nguy cơ bị ung thư? (Mi Trần, Gia Lai)',
            'answer'=>'Chào chị Mi,

                        Đúng như chị nói, việc bổ sung estrogen đơn thuần hay sử dụng nội tiết tố bằng đường uống hoặc tiêm qua da đều làm tăng nguy cơ huyết khối tĩnh mạch. Huyết khối tĩnh mạch là một bệnh lý nguy hiểm có thể đưa đến thuyên tắc phổi, thuyên tắc não, gây tử vong đột ngột. Dư thừa lượng estrogen trong cơ thể cũng được cảnh báo có thể làm tăng nguy cơ ung thư như ung thư vú, ung thư nội mạc tử cung…
                        
                        Khác với việc bổ sung estrogen “ngoại lai” từ bên ngoài vào cơ thể, thảo dược Lepidium Meyenii trong Sâm Angela Gold giúp phụ nữ tăng cường hoạt động của hệ trục Não bộ - Tuyến yên - Buồng trứng, từ đó giúp cơ thể phụ nữ tự cân chỉnh bộ 3 nội tiết tố nữ gồm estrogen, progesterone và testosterone theo đúng và đủ nhu cầu của cơ thể. Cơ chế trên không làm tăng và dư thừa lượng estrogen trong cơ thể.
                        
                        Thảo dược Lepidium Meyenii trong Sâm Angela Gold đã được kiểm chứng lâm sàng về tính hiệu quả và an toàn từ Mỹ. Những nghiên cứu được thực hiện tại Bệnh viện Phụ sản Trung Ương tại Việt Nam cũng cho thấy tính an toàn cao khi sử dụng Sâm Angela Gold thường xuyên và lâu dài cho phụ nữ Việt Nam. Vì vậy, chị có thể yên tâm sử dụng lâu dài.',
            'advisory_id'=>1,
            'title'=>'Uống Sâm Angela Gold có làm tăng estrogen, tăng nguy cơ ung thư không?',
            'slug'=>'uong-sam-angela-gold-co-lam-tang-estogen-tang-nguy-co-ung-thu-khong',
            'image'=>'ANGELA_5-290x185.jpg',
            'status'=>2],
            ['id'=>3,
            'name'=>'Nguyễn Văn TIến',
            'email'=>'tiennguyenhuu@gmail.com',
            'question'=>'Tôi năm nay 49 tuổi, vợ tôi nhỏ hơn tôi 4 tuổi. Gần nửa năm nay chuyện phòng the của vợ chồng tôi gặp trục trặc. Mặc dù tôi vẫn cố gắng thực hiện đủ màn dạo đầu nhưng khi “lâm trận” vẫn không được suôn sẻ. Vợ liên tục than đau rát và hay tìm cách né tránh. Gần đây tôi xem một chương trình trên TV nói Sâm Angela Gold rất tốt cho vấn đề sinh lý của phụ nữ.  Xin được hỏi sản phẩm này có cải thiện được vấn đề của vợ tôi không? Dùng bao lâu thì hiệu quả? Có nên dùng lâu dài không? Có bị lệ thuộc vào thuốc không? (Trần Trung Kiên, TP. HCM)',
            'answer'=>'Chào anh,

                        Rất thông cảm với những lo lắng mà anh đang gặp phải.
                        
                        Theo như câu hỏi anh gửi, được biết vợ anh đang ở độ tuổi tiền mãn kinh – mãn kinh. Chính những xáo trộn tâm sinh lý trong giai đoạn này là nguyên nhân lớn nhất khiến chuyện ái ân của phụ nữ gặp trục trặc, cụ thể là chứng khô âm đạo, giảm ham muốn.
                        
                        Nguyên nhân sâu xa gây ra hiện tượng khô âm đạo và giảm ham muốn ở phụ nữ độ tuổi này là do hệ trục Não bộ - Tuyến yên - Buồng trứng suy giảm hoạt động, vốn thường bắt đầu từ tuổi ngoài 30. Khi đó, sự rối loạn bộ 3 nội tiết tố nữ gồm progesterone, estrogen, testosterone… gây ra những triệu chứng thường gặp là niêm mạc âm đạo sẽ bị mỏng đi và teo lại, khả năng bài tiết dịch nhờn kém.
                        
                        Thảo dược thiên nhiên Lepidium Meyenii trong Sâm Angela Gold được nghiên cứu chứng minh có tác dụng tăng cường hoạt động của hệ trục Não bộ - Tuyến yên - Buồng trứng, từ đó giúp ổn định bộ 3 nội tiết tố nữ ở phái đẹp. Nhờ vậy, Lepidium Meyenii có thể giúp phụ nữ giảm nhẹ những triệu chứng trong thời kỳ tiền mãn kinh - mãn kinh, đặc biệt là giảm nhanh chứng khô âm đạo và tăng ham muốn, giúp đời sống tình dục của người phụ nữ trở nên viên mãn, chất lượng hơn một cách an toàn.
                        
                        Lepidium Meyenii là thảo dược hoàn toàn từ thiên nhiên có công dụng tự cân chỉnh nội tiết tố trong cơ thể đúng và đủ theo nhu cầu của cơ thể nên không xảy ra tình trạng lệ thuộc. Anh nên khuyên vợ an tâm sử dụng để cải thiện sức khỏe, sắc đẹp và sinh lý ngay từ bây giờ.',
            'advisory_id'=>1,
            'title'=>'Vợ bị giảm ham muốn, đau khi quan hệ. Sâm Angela Gold cải thiện vấn đề này cho phụ nữ ra sao?',
            'slug'=>'vo-bi-giam-ham-muon-dau-khi-quan-he-sam-angela-gold-cai-thien-van-de-nay-cho-phu-nu-ra-sao',
            'image'=>'ANGELA_s3-290x185.jpg',
            'status'=>2],
         

            ['id'=>4,
            'name'=>'Nguyễn Hữu Toàn',
            'email'=>'toannguyenhuu@gmail.com',
            'question'=>'Tôi 37 tuổi, người khỏe mạnh, chuyện ấy vẫn rất sung mãn. Vậy tôi có thể dùng Sâm Alipas Platimum để giúp duy trì sức khỏe và giữ vững phong độ không?',
            'answer'=>'Chào anh,

                        Anh hoàn toàn có thể dùng Sâm Alipas Platinum để giúp duy trì sức khỏe và chức năng sinh lý, làm chậm quá trình mãn dục nam, giữ vững sự sung mãn dài lâu trong đời sống gối chăn.
                        
                        Bên cạnh việc luyện tập, chế độ ăn uống, nghỉ ngơi… phù hợp, với liều dùng 1 viên mỗi ngày, Sâm Alipas Platinum (được sản xuất tại Mỹ) giúp giữ vừng nồng độ Testosterone (hormone quan trọng quyết định sức khỏe và sinh lý nam) ở mức cân bằng, ổn định, từ đó giúp thể chất khỏe mạnh, hạn chế nguy cơ mắc các bệnh mãn tính nguy hiểm như béo phì, huyết áp, tim mạch…; tinh thần hưng phấn, lạc quan, vui vẻ và đời sống sinh lý sung mãn.',
            'advisory_id'=>2,
            'title'=>'Cơ thể bình thường, có thể dùng Sâm Alipas Platinum để duy trì sức khỏe và sinh lý không?',
            'slug'=>'co-the-binh-thuong-co-the-dung-sam-alipas-platinum-de-duy-tri-suc-khoe-sinh-ly-khong',
            'image'=>'sam-alipas-platinum-4.jpg',
            'status'=>2],
            ['id'=>5,
            'name'=>'Nguyễn Hữu Toàn',
            'email'=>'toannguyenhuu@gmail.com',
            'question'=>'Chồng tôi năm nay 56 tuổi, vẫn còn ham muốn nhưng lại rất khó cương cứng. Ngoài ra, sức khỏe đang ngày càng sa sút, thường hay bị mất ngủ, người mệt mỏi. Chồng tôi có thể dùng Sâm Alipas Platinum được không? Sản phẩm có an toàn với người đã có tuổi?',
            'answer'=>'Chào chị,

                        Sâm Alipas Platinum là sản phẩm chăm sóc sức khỏe và sinh lý nam đã được kiểm chứng về tính hiệu quả, an toàn, không gây tác dụng phụ ngoài mong muốn. Vì thế, chị hoàn toàn có thể yên tâm mua sản phẩm cho anh nhà dùng để giúp phục hồi sức khỏe, cải thiện chức năng sinh lý.
                        
                        Ở độ tuổi ngoài 50 như chồng chị, nồng độ Testosterone trong cơ thể đã giảm đáng kể (theo các nghiên cứu thì mức độ giảm từ 30-50%), khiến cho nam giới dễ gặp các triệu chứng như rối loạn cương dương, giảm ham muốn tình dục và sức khỏe toàn thân ngày càng sa sút, cơ thể hay mệt mỏi, khó ngủ, mất ngủ, dễ mắc bệnh mãn tính nguy hiểm như tăng huyết áp, tiểu đường, bệnh tim mạch…
                        
                        Kết quả nghiên cứu cho thấy, Sâm Alipas Platinum chứa tinh chất Eurycoma Longifolia và các thảo dược đặc hiệu cho nam giới giúp Testosterone tăng 41% chỉ sau 5 ngày sử dụng, từ đó giúp gia tăng sức khỏe sinh lý và sức khỏe nền tảng của nam giới.',
            'advisory_id'=>2,
            'title'=>'Nam giới ngoài tuổi 50, dùng Sâm Alipas Platinum có an toàn với người có tuổi?',
            'slug'=>'nam-gioi-ngoai-tuoi-50-dung-sam-alipas-platinum-co-an-toan-voi-nguoi-co-tuoi',
            'image'=>'sam-alipas-platinum-5-290x185.jpeg',
            'status'=>2],
            ['id'=>6,
            'name'=>'Nguyễn Hữu Toàn',
            'email'=>'toannguyenhuu@gmail.com',
            'question'=>'Tôi 45 tuổi, phong độ ngày càng sa sút, thường xuyên gặp phải tình trạng “trên bảo dưới không nghe”, ngoài ra còn bị mất ngủ, thức giấc nửa đêm và rất khó ngủ lại. Vì thế, người hay mệt mỏi, dễ cáu gắt. Tôi lại đang bị bệnh cao huyết áp, vậy có thể dùng được Sâm Alipas Platinum để cải thiện các triệu chứng trên hay không?. Xin tư vấn giúp. Cảm ơn.',
            'answer'=>'Chào anh,

                            Sâm Alipas Platinum là sản phẩm chăm sóc sức khỏe, sinh lý nam, đã được nghiên cứu chứng minh về tính hiệu quả, an toàn với sức khỏe người dùng, kể cả với những người bị bệnh tăng huyết áp, tiểu đường, bệnh tim mạch… Vì thế, anh hoàn toàn có thể yên tâm sử dụng sản phẩm để cải thiện tình trạng rối loạn cương dương cũng như các triệu chứng sức khỏe mà mình đang gặp phải.
                            
                            Ở độ tuổi 45 như anh, nồng độ Testosterone trong máu đã và đang sụt giảm, dễ gây ra tình trạng “trên bảo dưới không nghe”, giảm ham muốn tình dục, kéo theo sức khỏe toàn thân sa sút. Sâm Alipas Platinum chứa tinh chất Eurycoma Longifolia (LE: 100) và các thảo dược đặc hiệu dành cho nam giới, có tác dụng kích thích cơ thể tăng cường sản sinh Luteinizing ở tuyến yên, từ đó gia tăng quá trình sản sinh Testosterone nội sinh mạnh mẽ  hơn  trong thời gian ngắn hơn. Khi nồng độ Testosterone trong cơ thể ổn định sẽ giúp nam giới cải thiện hiệu quả tình trạng rối loạn cương dương, tăng ham muốn tình dục, giảm hẳn các triệu chứng mất ngủ, khó ngủ, dễ cáu gắt, phục hồi sức khỏe toàn thân, làm chậm quá rình mãn dục.',
            'advisory_id'=>2,
            'title'=>'Nam giới bị huyết áp cao, tiểu đường, bệnh tim mạch… dùng Sâm Alipas Platinum được không?',
            'slug'=>'nam-gioi-bi-huyet-ap-cao-tieu-duong-benh-tim-mach-dung-sam-alipas-duoc-khong',
            'image'=>'sam-alipas-platinum-3-290x185.jpg',
            'status'=>2],



            ['id'=>7,
            'name'=>'Nguyễn Trọng Hoàng',
            'email'=>'hoangnguyenhuu@gmail.com',
            'question'=>'Tôi cao 1.60m, nặng 48kg. Theo chỉ số BMI thì tôi bình thường, không bị thừa cân nhưng thuộc tạng người dễ tăng cân. Nếu không muốn tăng cân, tôi vẫn ăn uống và sinh hoạt bình thường như hiện tại nhưng uống LIC thì có được không? Liều dùng và chế độ ăn uống ra sao? (Đỗ Mỹ Yến, 40 tuổi, Bình Định)',
            'answer'=>'Chào chị Yến,

                                Theo số cân nặng và chiều cao chị cung cấp, chỉ số BMI của chị ở mức 18. 75 đây là mức rất cân đối.
                                
                                Tuy nhiên, do ảnh hưởng của nội tiết tố và sự chuyển hóa cơ thể kém đi nên đa phần phụ nữ ở độ tuổi của chị rất dễ tăng cân.
                                
                                Để giữ gìn vóc dáng, duy trì và kiểm soát cân nặng tốt, ngoài chế độ dinh dưỡng và sinh hoạt như hiện tại, việc sử dụng thêm sản phẩm hỗ trợ giảm cân LIC là rất tốt. Vì ngoài công dụng giữ dáng lâu dài mà không gây mệt mỏi, chán ăn, mất nước, LIC còn giúp phòng ngừa các bệnh mạn tính như tim mạch, cao huyết áp…
                                
                                Hiện tại, chị có thể dùng LIC theo liều dùng để kiểm soát cân nặng là: 1 viên/ngày trước bữa ăn 30 phút. ',
            'advisory_id'=>3,
            'title'=>'Không cần giảm cân, chỉ muốn giữ cân thì uống LIC có được không?',
            'slug'=>'khong-can-giam-can-chi-muon-giu-can-thi-uong-lic-duoc-khong',
            'image'=>'benh nguy hiem 5.jpg',
            'status'=>2],
            ['id'=>8,
            'name'=>'Nguyễn Trọng Hoàng',
            'email'=>'hoangnguyenhuu@gmail.com',
            'question'=>'Tôi 54 tuổi, nặng 70kg, cao 156cm, đang sử dụng thuốc cải thiện cao huyết áp. Cho hỏi tôi có thể sử dụng LIC được không? Sử dụng trong thời gian bao lâu là được? Nhà tôi có người bị tiểu đường nếu dùng LIC luôn thì có được không? Xin cám ơn. (Trần Thanh Liên, Hà Nội).',
            'answer'=>'Chào chị Thanh Liên, 

                        Theo kết quả nghiên cứu lâm sàng của trường Đại Học California – Davis, Mỹ, tinh chất Belaunja và Mangastin có trong LIC không làm ảnh hưởng đến tim mạch, huyết áp nên vẫn dùng được cho bệnh nhân tăng huyết áp. Để đảm bảo hiệu quả của thuốc cải thiện tăng huyết áp và LIC, chị nên uống cách nhau 2 giờ. LIC cũng có tác dụng hỗ trợ ổn định huyết áp.
                        
                        Đánh giá chỉ số BMI của chị là 28.76, đang ở mức béo phì độ I. Vì vậy, để giảm cân, chị nên áp dụng 3 nguyên tắc vàng sau:
                        
                        Chế độ dinh dưỡng phù hợp
                        Tăng cường vận động thể lực tối thiểu 30 phút/ngày, 5 ngày/tuần
                        Sử dụng sản phẩm LIC: 2 viên/ngày
                        Tinh chất Belaunja và Mangastin có trong LIC giúp giảm đáng kể chỉ số BMI, cân nặng và số đo các vòng eo, hông... sau 2 đến 8 tuần sử dụng. Sau khi đã đạt được cân nặng mong muốn, chị nên duy trì liều 1 viên/ngày để kiểm soát cân nặng.',
            'advisory_id'=>3,
            'title'=>'Bị cao huyết áp và tiểu đường có dùng được LIC không?',
            'slug'=>'bi-cao-huyet-ap-va-tieu-duong-co-dung-duoc-lic-khong',
            'image'=>'giai-bai-toan-giam-can-an-toan-bang-3-nguyen-tac-vang-1-290x185.jpg',
            'status'=>2],
            ['id'=>9,
            'name'=>'Nguyễn Trọng Hoàng',
            'email'=>'hoangnguyenhuu@gmail.com',
            'question'=>'Trước khi cưới 2 tháng tôi có sử dụng LIC để giảm cân. Hiện giờ vợ chồng tôi có ý định sinh con nhưng không biết tôi đang uống LIC thì có ảnh hưởng gì đến khả năng sinh sản và sự phát triển của thai nhi hay không. Nên ngưng dùng thuốc bao lâu thì có thể có con được?',
            'answer'=>'Chào bạn, 

                    Viên uống giảm cân LIC được chiết xuất 100% thiên nhiên và đã được kiểm chứng lâm sàng về tính an toàn, hiệu quả, không gây tác dụng phụ nên không ảnh hưởng đến khả năng sinh sản.
                    
                    Tuy nhiên, theo khuyến cáo của Bộ Y tế, trong thời gian mang thai và cho con bú, các bà mẹ không nên dùng bất kỳ các loại thuốc nào, kể cả thuốc giảm cân. Vì vậy, với tất cả các sản phẩm giảm cân nói chung, bạn nên ngưng sử dụng trước khi có ý định có con từ 1-2 tháng và không dùng trong giai đoạn mang thai và cho con bú. 
                    
                    Sau khi ngưng cho con bú, bạn có thể sử dụng LIC trở lại để giảm cân và giữ dáng sau sinh.',
            'advisory_id'=>3,
            'title'=>'LIC có ảnh hưởng gì đến việc sinh con không? Ngưng dùng trong bao lâu thì có thể có con?',
            'slug'=>'lic-co-anh-huong-gi-den-viec-sinh-con-khong-ngung-dung-trong-bao-lau-thi-co-the-co-con',
            'image'=>'EmptyName 8-290x185.jpg',
            'status'=>2],


            ['id'=>10,
            'name'=>'Nguyễn Hữu Hải',
            'email'=>'hoangnguyenhuu@gmail.com',
            'question'=>'Mẹ tôi sống chung với các cơn đau nhức khớp gối đã gần 10 năm nay. Mỗi khi trời trở lạnh hay đi lại nhiều, cơn đau hành hạ khiến bà mệt mỏi, khi ấy phải dùng đến thuốc giảm đau mới thuyên giảm. Gần đây, tôi được người quen giới thiệu dùng Jex Max, nhưng không biết sản phẩm có tác dụng với người đau nhức khớp kinh niên như mẹ tôi không? Xin tư vấn giúp, tôi cảm ơn.',
            'answer'=>'Chào bạn,

                        Jex Max chứa tinh chất PEPTAN thiên nhiên có tác dụng vượt trội trong việc giảm đau nhức khớp kinh niên ở các bệnh nhân thoái hóa khớp, thoát vị đĩa đệm, viêm khớp dạng thấp… 
                        
                        PEPTAN được các nghiên cứu khoa học kiểm chứng đạt hiệu quả tối ưu trong giảm đau xương khớp, cải thiện vận động, hỗ trợ cải thiện các tổn thương ở các khớp trong cơ thể. Tại thử nghiệm lâm sàng mù đôi có đối chứng giả dược trên 94 đối tượng nữ trong độ tuổi 40-70 bị đau khớp gối hoặc đau do thoái hóa khớp, kết quả chứng minh PEPTAN làm giảm đau rõ rệt khi vận động và tăng mức độ dễ dàng di chuyển của khớp gối.
                        
                        Vì thế, mẹ bạn hoàn toàn có thể dùng được Jex Max để giúp cải thiện tình trạng đau nhức khớp gối kinh niên. Sản phẩm cũng đã được FDA (Cục quản lý dược phẩm và thực phẩm Mỹ) chứng nhận, an toàn với người trung niên, cao tuổi.',
            'advisory_id'=>4,
            'title'=>'Jex Max có hỗ trợ cải thiện bệnh xương khớp cho người bị đau nhức khớp kinh niên không?',
            'slug'=>'jex-max-co-ho-tro-cai-thien-benh-xuong-khop-cho-nguoi-bi-dau-nhuc-khop-kinh-nien-khong',
            'image'=>'2744-voi-hoa-cot-song_(2)-290x185.jpg',
            'status'=>2],
            ['id'=>11,
            'name'=>'Nguyễn Hữu Hải',
            'email'=>'hoangnguyenhuu@gmail.com',
            'question'=>'Tôi năm nay 61 tuổi, bị bệnh viêm đa khớp dạng thấp 3 năm nay, các đầu ngón tay thường hay đau nhức, sưng đỏ, đặc biệt là khi trời trở lạnh. Tôi dùng Jex Max được hơn 1 tháng cảm thấy đỡ đau hơn nhiều. Vậy nếu tôi tiếp tục dùng trong thời gian dài có an toàn với độ tuổi của tôi không? Xin cảm ơn.',
            'answer'=>'Chào bác,

                    Jex Max chứa tinh chất PEPTAN – một loại peptide cao cấp với nhiều acid amin quý có nguồn gốc 100% thiên nhiên, được chứng minh an toàn cho sức khỏe người dùng, kể cả với người trung niên, cao tuổi. Dùng Jex Max thường xuyên, trong thời gian dài không làm đau bao tử, không ảnh hưởng đến sức khỏe gan, thận, huyết áp… Sản phẩm cũng đã được kiểm chứng lâm sàng, FDA (Cục quản lý dược phẩm và thực phẩm Mỹ) chứng nhận an toàn.
                    
                    Vì thế, bác hoàn toàn có thể yên tâm tiếp tục sử dụng Jex Max để hỗ trợ quá trình cải thiện bệnh. Với tác dụng giảm đau, tăng cường khả năng tái tạo sụn và xương dưới sụn, dùng Jex Max 2 viên mỗi ngày sẽ giúp cải thiện hiệu quả các triệu chứng đau, sưng, tê cứng các khớp trong các bệnh lý xương khớp như thoái hóa khớp, viêm đa khớp dạng thấp, làm chậm sự tiến triển của bệnh.',
            'advisory_id'=>4,
            'title'=>'Dùng Jex Max thường xuyên có an toàn với người trung niên, cao tuổi?',
            'slug'=>'dung-lex-max-thuong-xuyen-co-an-toan-voi-nguoi-trung-nien-cao-tuoi',
            'image'=>'jexmax (2)-290x185.jpg',
            'status'=>2],
            ['id'=>12,
            'name'=>'Nguyễn Hữu Hải',
            'email'=>'hoangnguyenhuu@gmail.com',
            'question'=>'Tôi bị thoái hóa khớp gối đã hơn 5 năm, muốn dùng Jex Max để cải thiện tình trạng đau nhức, tê cứng khớp gối. Tuy nhiên, tôi lại có bệnh đau bao tử nên không biết dùng Jex Max được không? Xin tư vấn giúp, tôi chân thành cảm ơn.',
            'answer'=>'Chào anh/chị,

                    Jex Max là sản phẩm chăm sóc sức khỏe xương khớp đã được kiểm chứng lâm sàng về tính hiệu quả và FDA chứng nhận an toàn. Những người bị đau bao tử (dạ dày), huyết áp cao hoặc đang mắc bệnh về gan, thận hoàn toàn có thể dùng được Jex Max mà không ảnh hưởng đến sức khỏe.
                    
                    Jex Max chứa tinh chất PEPTAN – 100% thiên nhiên, cung cấp nhiều acid amin quý với độ tinh chiết cao mà không thể tìm thấy trong các loại protein khác. Sản phẩm được sản xuất tại Mỹ dựa trên công nghệ tinh chiết hiện đại để loại bỏ những tạp chất và chỉ giữ lại những tinh chất có lợi cho sức khỏe xương khớp.
                    
                    Do đó, anh/chị hoàn toàn có thể yên tâm sử dụng Jex Max giúp hỗ trợ cải thiện bệnh thoái hóa khớp gối. Với liều dùng 2 viên mỗi ngày, Jex Max tăng cường tái tạo sụn và xương dưới sụn, giảm đau hiệu quả, an toàn, cải thiện tình trạng tê cứng khớp, gia tăng mức độ vận động của khớp gối, làm chậm tiến trình tiến triển của bệnh.',
            'advisory_id'=>4,
            'title'=>'Jex Max có dùng được cho người đau bao tử, mắc bệnh huyết áp, gan, thận...?',
            'slug'=>'jex-max-co-dung-duoc-cho-nguoi-dau-bao-tu-mac-benh-huyet-ap-gan-than',
            'image'=>'JEX_5 (Copy)-290x185.jpg',
            'status'=>2],


            ['id'=>13,
            'name'=>'Nguyễn Thị Nhàn',
            'email'=>'hoangnguyenhuu@gmail.com',
            'question'=>'Chào chuyên gia! Tôi bị viêm gan B mãn tính, vẫn đang trong thời gian uống thuốc điều trị. Tuy nhiên tôi rất lo sợ bệnh sẽ diễn tiến sang xơ gan do phát hiện bệnh trễ quá. Trường hợp của tôi thì nên uống Hewel với liều lượng bao nhiêu mỗi ngày để mang lại hiệu quả phòng ngừa xơ gan tốt nhất?

                        Quốc Bảo (Phan Rang)',
            'answer'=>'Chào bạn!

                    Tuy viêm gan B đã chuyển qua mãn tính nhưng bạn cũng không nên quá lo lắng ảnh hưởng tinh thần. Người bị viêm gan B vẫn có thể “chung sống hòa bình” với bệnh suốt đời nếu tuân thủ tốt phác đồ cải thiện của chuyên gia và chủ động  bảo vệ gan thông qua việc kiểm soát tế bào Kupffer bên trong gan. 
                    
                    Kupffer là loại đại thực bào nằm ở xoang gan, chuyên xử lý các loại virus, vi khuẩn, hồng cầu chết. Khi bị kích hoạt quá mức bởi các yếu tố độc hại từ bia rượu, virus, thực phẩm bẩn, ... Kuppfer sẽ phóng thích ra các chất gây viêm làm tổn hại gan, trong đó đặc biệt là TGF-β, yếu tố kích hoạt tế bào hình sao sản sinh mô sợi. Các chất xơ tạo ra ngày càng nhiều, sẽ càng gây tổn thương gan trầm trọng hơn, dẫn đến xơ hóa gan không thể phục hồi.
                    
                    Vì vậy, bên cạnh tuân thủ phác đồ cải thiện của chuyên gia, chế độ dinh dưỡng, nghỉ ngơi hợp lý nhằm đưa virus viêm gan B về trạng thái không hoạt động, bạn nên dùng Hewel mỗi ngày để  kiểm soát tế bào Kupffer, mang lại hiệu quả điều trị và phòng ngừa biến chứng tối ưu nhất.
                    
                    Vì đang trong quá trình dùng điều trị đặc hiệu viêm gan mãn tính nên bạn chỉ nên uống 2 viên Hewel (sáng và chiều).
                    
                    Nên dùng mỗi ngày để có sức khỏe tốt hơn và sống một cuộc sống vui khỏe như một người bình thường bạn nhé!
                    
                    Trân trọng!
                    
                    Trung tâm Tư vấn Y khoa - Công ty Cổ Phần Dược Phẩm ECO',
            'advisory_id'=>5,
            'title'=>'Bị viêm gan B mãn tính, nên uống Hewel liều lượng bao nhiêu để phòng xơ gan hiệu quả?',
            'slug'=>'bi-viem-gan-b-man-tinh-nen-uong-hewel-lieu-luong-bao-nhieu-de-phong-xo-gan-hieu-qua',
            'image'=>'sl1-290x185.jpg',
            'status'=>2],
            ['id'=>14,
            'name'=>'Nguyễn Thị Nhàn',
            'email'=>'hoangnguyenhuu@gmail.com',
            'question'=>'Cách đây 1 tuần, ba tôi đi khám tổng quát thì chuyên gia chẩn đoán gan nhiễm mỡ cấp độ 2 do dùng bia rượu. Tôi nghe nhiều người nói Hewel giảm mấy dấu hiệu do bia rượu tốt, nhưng không biết có hiệu quả cho người bị gan nhiễm mỡ không?

                     Hải Châu (Đắk Lắk)',
            'answer'=>'Chào bạn!

                    Bên cạnh tác dụng cải thiện tổn thương, giảm các triệu chứng mẩn ngứa, mề đay, mụn nhọt do bia rượu, Hewel còn giúp hỗ trợ điều trị các bệnh về gan: gan nhiễm mỡ, tăng men gan, viêm gan, đặc biệt là viêm gan do bia rượu. Vì vậy, bạn có thể mua Hewel cho ba sử dụng được nhé!
                    
                    Trường hợp gan nhiễm mỡ do bia rượu của ba bạn không phải là hiếm, vì có đến trên 90% những người thường xuyên dùng bia rượu bị gan nhiễm mỡ. 
                    
                    Nguyên nhân là do chất cồn trong rượu bia khiến tế bào Kupffer làm gián đoạn quá trình oxy hóa acid béo, làm tăng tích lũy và giảm ly giải chất béo gây mỡ hóa gan. Song song đó, bia rượu cũng làm thúc đẩy chuyển dịch các độc tố, vi khuẩn từ ruột vào gan, khiến những người nghiện rượu bia dễ bị nhiễm độc. Các độc tố này khi xâm nhập vào cơ thể sẽ càng khiến tế bào Kupffer bị kích hoạt quá mức, tích cực sản xuất ra các chất gây viêm hủy hoại gan người bệnh. 
                    
                    Nếu người bệnh tiếp tục uống bia rượu không kiểm soát, tình trạng này sẽ nặng hơn và chuyển sang viêm gan nhiễm mỡ. Trung bình cứ 4 người bị gan nhiễm mỡ thì có 1 người sẽ diễn tiến sang viêm gan nhiễm mỡ, xơ gan hoặc ung thư gan.
                    
                    Do đó, kiểm soát hoạt động của tế bào Kupffer, ngăn cản chúng sản xuất hàng loạt các yếu tố gây viêm có thể được xem là “chìa khóa vàng” trong phòng và cải thiện gan nhiễm mỡ.
                    
                    Hewel chứa tinh chất từ Wasabia và S. Marianum có tác dụng vượt trội trong việc kiểm soát tế bào Kupffer, giảm trên 50% các chất gây viêm TNF-α, TGF-β và Interleukin chỉ sau 24h sử dụng, nhờ đó giúp cải thiện nguyên nhân gây bệnh gan (gan nhiễm mỡ, viêm gan, xơ gan, ung thư gan...) và phòng ngừa xơ gan hiệu quả. Đồng thời, Wasabia và S. Marianum còn thúc đẩy quá trình khử độc trong gan, phòng ngừa nhiễm độc, bảo vệ lá gan cho những người thường xuyên dùng bia rượu, .
                    
                    Hewel được bán ở hầu hết các nhà thuốc trên toàn quốc, ngày uống 2 lần (sáng, chiều), mỗi lần 1 viên. Nên dùng thường xuyên và uống trước khi ăn 30 phút để đạt hiệu quả tối ưu nhất. Với người đã bị gan nhiễm mỡ như ba bạn, việc cai rượu bia có ý nghĩa rất tích cực trong việc cải thiện, giúp nâng cao hiệu quả và rút ngắn thời gian cải thiện. Ba bạn cũng nên chú trọng việc giảm cân nếu như thừa cân hoặc béo phì (BMI > 23 là thừa cân), xây dựng thói quen tập thể dục ít nhất 4 lần/tuần với các môn thể thao nhẹ nhàng như đi bộ, cầu lông… Trong bữa ăn hằng ngày, nên ăn ít chất béo bão hòa và tăng thêm hàm lượng chất xơ.
                    
                    Chúc bạn và gia đình luôn vui khỏe!
            
                     Trân trọng!',
            'advisory_id'=>5,
            'title'=>'Sử dụng Hewel có giúp cải thiện gan nhiễm mỡ hiệu quả không?',
            'slug'=>'su-dung-hewel-co-giup-cai-thien-gan-nhiem-mo-hieu-qua-khong',
            'image'=>'EmptyName 10-290x185.jpg',
            'status'=>2],
            ['id'=>15,
            'name'=>'Nguyễn Thị Nhàn',
            'email'=>'hoangnguyenhuu@gmail.com',
            'question'=>'Trước tình trạng thực phẩm bẩn hiện nay, ăn gì cũng sợ ung thư nên tôi rất lo lắng cho sức khỏe của cả gia đình.  Xin hỏi tôi có thể cho cả nhà dùng Hewel để giải độc, ngừa ung thư được không thưa bác sĩ?

            Thạch Thảo (Hà Nội)',
            'answer'=>'Hiện nay, trên thị trường, ngày càng có thêm nhiều thực phẩm nhiễm hóa chất độc hại như: rau củ với lượng thuốc trừ sâu quá giới hạn, thịt có hóa chất tạo nạc hoặc thuốc kích thích tăng trưởng, hủ tiếu bún với chất tẩy trắng cực độc, trái cây có thuốc ép chín,… Những hóa chất tồn dư này nếu sử dụng thường xuyên, lâu ngày sẽ tích tụ trong cơ thể. Người dùng có thể có các triệu chứng như mệt mỏi, đầy bụng, khó tiêu, táo bón, dị ứng, mề đay, mẩn ngứa. Chính các tác nhân nhiễm độc này sẽ khiến tế bào Kupffer trong gan bị kích hoạt quá mức thúc đẩy phản ứng viêm làm gan bị hủy hoại, gây viêm gan, xơ hóa tế bào gan, tạo điều kiện để tế bào ung thư sinh sôi, phát triển tại gan và nhiều cơ quan khác.

            Bạn có thể yên tâm cho cả gia đình dùng Hewel để bảo vệ gan khỏi độc tố không chỉ từ thực phẩm mà còn từ các hóa chất từ môi trường, thuốc lá, bia rượu... Với sự kết hợp của tinh chất Wasabia và S.Marianum thiên nhiên, Hewel giúp kiểm soát hoạt động tế bào Kupffer bên trong xoang gan, hỗ trợ thúc đẩy quá trình giải độc, chống độc tại gan. Qua đó, bảo vệ gan, cho lá gan luôn khỏe mạnh, phòng ngừa ung thư và các triệu chứng nhiễm độc.
            
            Trân trọng!',
            'advisory_id'=>5,
            'title'=>'Có thể dùng Hewel để giải độc và ngăn ngừa ung thư từ thực phẩm bẩn được không?',
            'slug'=>'co-the-dung-hewel-de-giai-doc-va-ngan-ngua-ung-thu-tu-thuc-pham-duoc-khong',
            'image'=>'viem-gan-a4-290x185.jpg',
            'status'=>2],
          
        ]);

        

        DB::table('cate_health')->delete();
        DB::table('cate_health')->insert([
            ['id'=>1,'name'=>'SỨC KHOẺ SINH LÝ NỮ','slug'=>'suc-khoe-sinh-ly-nu'],
            ['id'=>2,'name'=>'SỨC KHOẺ SINH LÝ NAM','slug'=>'suc-khoe-sinh-lý-nam'],
            ['id'=>3,'name'=>'LÃO HOÁ DA','slug'=>'lao-hoa-da'],
             
        ]); 

        DB::table('health')->delete();
        DB::table('health')->insert([
            ['id'=>1,'title'=>'Làm thế nào để chọn đúng sản phẩm tăng hormone nữ an toàn?',
            'slug'=>'lam-the-nao-de-chon-dung-san-pham-tang-hormone-nu-an-toan',
            'image'=>'melan-cholia-277731-290x185.jpg',
            'summary'=>'Sức khỏe, đời sống chăn gối, nhan sắc rủ nhau xuống dốc khi bạn bắt đầu đặt chân sang cột mốc tuổi 35 - độ tuổi mà các hormone trong cơ thể người phụ nữ  thiếu hụt và xáo trộn. Cách cải thiện tình trạng này chính là  làm thế nào để tăng nồng độ hormone nữ, nhưng không phải ai cũng tìm được phương pháp thực sự hiệu quả và an toàn.',
            'content'=>'Tuổi tiền mãn kinh, mãn kinh là giai đoạn sinh lý bình thường của cơ thể nhưng đây lại là thời kỳ tiềm ẩn nhiều đợt "sóng ngầm", có sức công phá mạnh mẽ khiến hầu hết phụ nữ đều phải trải qua những thay đổi lớn về sức khỏe, sắc đẹp, đặc biệt là sự xuống cấp của làn da. Vì thế, việc tìm bí quyết chăm sóc sức khỏe và làm đẹp cho da tuổi tiền mãn kinh, mãn kinh là vấn đề luôn được phụ nữ quan tâm.

                        Tuổi tiền mãn kinh, mãn kinh ảnh hưởng đến sức khỏe và làn da như thế nào?
                        Bước vào thời kỳ tiền mãn kinh, mãn kinh, hệ trục “vàng” Não bộ - Tuyến yên – Buồng trứng suy giảm hoạt động khiến bộ 3 nội tiết tố: estrogen, progesterone và testosterone trồi sụt bất thường. Lúc này, phụ nữ phải đối mặt với hàng loạt vấn đề về thể chất và tâm thần kinh: kinh nguyệt không đều, bốc hỏa, đổ mồ hôi đêm, rối loạn giấc ngủ, giảm khả năng sinh sản, khô teo âm đạo, giảm ham muốn tình dục, giảm trí nhớ, kém tập trung, tâm trạng thất thường, trầm cảm, căng thẳng và các bệnh lý khác như loãng xương, bệnh lý tim mạch,…Tuổi tiền mãn kinh, mãn kinh ảnh hưởng đến sức khỏe và làn da như thế nào?
                        Tuổi tiền mãn kinh, mãn kinh là giai đoạn sinh lý bình thường của cơ thể nhưng đây lại là thời kỳ tiềm ẩn nhiều đợt "sóng ngầm", có sức công phá mạnh mẽ khiến hầu hết phụ nữ đều phải trải qua những thay đổi lớn về sức khỏe, sắc đẹp, đặc biệt là sự xuống cấp của làn da. Vì thế, việc tìm bí quyết chăm sóc sức khỏe và làm đẹp cho da tuổi tiền mãn kinh, mãn kinh là vấn đề luôn được phụ nữ quan tâm.
                        
                        Tuổi tiền mãn kinh, mãn kinh ảnh hưởng đến sức khỏe và làn da như thế nào?
                        Bước vào thời kỳ tiền mãn kinh, mãn kinh, hệ trục “vàng” Não bộ - Tuyến yên – Buồng trứng suy giảm hoạt động khiến bộ 3 nội tiết tố: estrogen, progesterone và testosterone trồi sụt bất thường. Lúc này, phụ nữ phải đối mặt với hàng loạt vấn đề về thể chất và tâm thần kinh: kinh nguyệt không đều, bốc hỏa, đổ mồ hôi đêm, rối loạn giấc ngủ, giảm khả năng sinh sản, khô teo âm đạo, giảm ham muốn tình dục, giảm trí nhớ, kém tập trung, tâm trạng thất thường, trầm cảm, căng thẳng và các bệnh lý khác như loãng xương, bệnh lý tim mạch,…',
            'cate_id'=>1,
            ],

            ['id'=>2,'title'=>'P. Leucotomos - Chống nắng từ bên trong và cải thiện da lão hoá cực kỳ hiệu quả',
            'slug'=>'p-Leucotomos-chong-nang-tu-ben-trong-va-cai-thien-da-lao-hoa-cuc-ky-hieu-qua',
            'image'=>'tinh-chat-Polypodium-Leucotomos2-290x185.jpg',
            'content'=>'1. P. Leucotomos là gì?

                        P. Leucotomos là một thảo dược quý của vùng Trung Nam Mỹ, được người Honduras cổ đại xem như phương thuốc bí truyền cải thiện nhiều bệnh bằng đường uống, thậm chí người Maya dùng P. Leucotomos như một loại trà. Trong suốt 40 năm qua, nhiều nghiên cứu khoa học đã khẳng định P. Leucotomos bằng đường uống giúp bảo vệ và tái tạo cấu trúc nền của da, hạn chế các tổn thương do tia cực tím.
                        
                        2. Công dụng của P. Leucotomos:
                        
                        P. Leucotomos rất có lợi cho sức khỏe làn da, đặc biệt bảo vệ, tái tạo và duy trì cấu trúc nền của da. Nghiên cứu của ĐH Harvard (Mỹ) khẳng định tinh chất thiên nhiên P. Leucotomos giúp:
                        
                        Căng mịn da, giảm nhăn da, ngăn lão hoá sớm (với các biểu hiện như nhăn - khô - sạm) và cải thiện tình trang lão hoá da hiệu quả.
                        
                        P. Leucotomos bảo vệ cấu trúc nền của da bằng cách giảm tác động của men tiêu hủy cấu trúc nền là MMPs (Matrix Metalloproteinases), đồng thời kích thích sự phát triển của các protein dạng sợi (bao gồm: collagen, elastin, laminin, fibronectin) và tăng cường sản xuất proteoglycan là những thành phần quan trọng tạo nên sự săn chắc, tính đàn hồi và độ ẩm của da.
                        
                        Giảm sạm, làm sáng da:
                        
                        P. Leucotomos ức chế hoạt động của tế bào sắc tố đến 50% nhờ trung hòa các chất có hại như superoxide anion, hydroxyl radicals, singlet oxygen, 8-oxd-Guanosine... Các nhà khoa học thậm chí còn gọi P.Leucotomos là “kem chống nắng từ bên trong bằng đường uống”.
                        
                        Kháng viêm, tăng cường hệ miễn dịch của da:
                        
                        P. Leucotomos có đặc tính chống oxy hóa, giúp bảo vệ các tế bào Langerhans – là những tế bào miễn dịch của da, từ đó bảo vệ da khỏi bị viêm nhiễm, tăng cường hệ miễn dịch cho da.
                        
                        Sinh lý nữ - 83
                        
                        3. Tinh chất P.Leucotomos trong Sâm Angela Gold
                        
                        Mới đây, các nhà khoa học Mỹ đã nghiên cứu và đưa tinh chất P.Leucotomos vào thành phần chính của Sâm Angela Gold, bên cạnh tinh chất Lepidium Meyenii để chăm sóc toàn diện cho sức khỏe và làn da phụ nữ. Đặc biệt, nhờ công nghệ tinh chiết hiện đại, đảm bảo đúng và đủ hàm lượng tinh chất giúp phát huy tối đa tác dụng bảo vệ và tái tạo cấu trúc nền - bộ khung quan trọng nhất của làn da từ đó mang đến cho phụ nữ một giải pháp chăm sóc da, ngăn ngừa lão hóa da, giữ da luôn mềm mịn, căng sáng từ bên trong. Để phát huy tác dụng, phụ nữ nên dùng thường xuyên Sâm Angela Gold 1 viên x 2 lần/ ngày (sáng, chiều), uống trong hoặc sau bữa ăn.',
            'summary'=>'Nhiều thế kỷ qua, các thổ dân Châu Mỹ đã sử Polypodium Leucotomos (P. Leucotomos) để cải thiện các vấn đề về da. Đến năm 1970 các nhà khoa học Mỹ đã chứng minh thảo dược P. Leucotomos giúp bảo vệ cấu trúc nền của da trước tác hại của tia cực tím. Đồng thời, P. Leucotomos còn có đặc tính chống oxy hóa, kháng viêm rất tốt, giúp ngăn ngừa quá trình lão hóa da, hạn chế tình trạng da khô, nhăn, sạm giúp da khỏe mạnh, mềm mịn, căng sáng từ bên trong.',
            'cate_id'=>1,
            ],
         
            ['id'=>3,'title'=>'Hệ trục não bộ - tuyến yên - buồng trứng',
            'slug'=>'he-truc-nao-bo-buong-trung',
            'image'=>'htnbtybt-290x185.jpg',
            'content'=>'Não Bộ
                                Não bộ là cơ quan có cấu tạo tiến hóa cao, đảm bảo những họat động tinh tế nhất, đáp ứng thích hợp với những kích thích từ bên ngoài cũng như bên trong cơ thể. Đặc biệt, vùng dưới đồi là một vùng rất nhỏ thuộc não, đóng vai trò như một cầu nối trung gian giữa 2 hệ thống thần kinh và nội tiết, do có mối liên hệ mật thiết với tuyến yên tạo nên một đơn vị chức năng vùng dưới đồi – tuyến yên, giữ vai trò trung tâm, có tác dụng điều hòa hoạt động các tuyến nội tiết như tuyến giáp, tuyến thượng thận, các tuyến sinh dục.
                                
                                Sinh lý nữ - 38
                                
                                Tuyến Yên
                                Tuyến yên liên hệ với vùng dưới đồi bởi cuống tuyến yên. Đây là một tuyến nhỏ, có đường kính 1 cm và trọng lượng từ 0,5gr - 1gr, nhưng lại đóng vai trò chính trong sự kiểm soát chức năng chuyển hóa của toàn cơ thể.
                                
                                Sinh lý nữ - 38
                                
                                Buồng trứng
                                Từ lúc mới sinh ra, buồng trứng đã có nhiều nang trứng, mỗi nang trứng có một trứng chưa trưởng thành. Lúc sinh ra có khoảng 1 triệu trứng ở cả hai buồng trứng, sau đó bị thoái hóa dần, để đến tuổi dậy thì còn khoảng 300.000 trứng. Trong suốt thời kỳ sinh sản, có khoảng 400 nang trứng phát triển, nhưng mỗi tháng thường chỉ có một trứng rụng tạo nên chu kỳ kinh nguyệt hoặc chuẩn bị cho quá trình thụ thai. Đến tuổi mãn kinh chỉ còn một số nang trứng nguyên thủy ở mỗi buồng trứng."
                                
                                Sinh lý nữ - 38
                                
                                Vai trò của Hệ trục "Vàng"
                                
                                Ở tuổi dậy thì, hệ trục vàng giúp cho bé gái biến thành thiếu nữ với các đường cong hấp dẫn, giúp làn da căng sáng, mềm mịn. Đồng thời bên trong, sức khỏe nói chung và bộ máy sinh sản nói riêng được hoàn thiện để phái đẹp thực hiện thiên chức làm mẹ, làm vợ cho những năm tháng sau đó.
                                
                                Ở độ tuổi sinh sản, hệ trục vàng làm việc trơn tru đều đặn: buồng trứng nhận mệnh lệnh từ não bộ - tuyến yên để sản xuất hormone. Khi hormone bị thiếu hụt hoặc dư thừa, buồng trứng sẽ phản hồi cho não bộ. Cơ chế “ra mệnh lệnh - phản hồi ngược” và “tự điều chỉnh” diệu kỳ giúp duy trì, ổn định bộ 3 nội tiết tố, từ đó chi phối hoạt động của nhiều bộ phận trong cơ thể như thần kinh, tim mạch, tiêu hóa, sinh lý,… giúp phái đẹp đạt đến đỉnh cao của nhan sắc, sức khỏe, đời sống tình dục…
                                
                                Khi thời kỳ sinh sản chấm dứt, hệ trục vàng sẽ tiếp tục giữ vai trò cân chỉnh bộ 3 nội tiết tố, giúp cơ thể người phụ nữ duy trì chất lượng cuộc sống. Tuy nhiên, giai đoạn sau tuổi 30 (giai đoạn tiền mãn kinh - mãn kinh) sẽ diễn ra hàng loạt những xáo trộn, bất ổn trong cuộc sống của người phụ nữ. Điều đó được khoa học khẳng định là do sự suy giảm hoạt động của hệ trục não bộ - tuyến yên - buồng trứng.',
            'summary'=>'Hệ trục "vàng" Não bộ - Tuyến yên - Buồng trứng là hệ trục thần kinh – nội tiết. Hệ trục đóng vai trò quyết định cho sức khỏe, sắc đẹp, ham muốn tình dục lẫn khả năng sinh sản của nữ giới, hệ trục vàng vừa chỉ huy, sản xuất các nội tiết tố (GnRH, FSH, LH, progesterone, estrogen, testosterone...) trong đó, quan trọng nhất là bộ 3 nội tiết tố estrogen, progesterone và testosterone.',
            'cate_id'=>1,
            ],
             

            ['id'=>4,'title'=>'Phát hiện mới giúp nâng cao phong độ nam giới',
            'slug'=>'phat-hien-moi-giup-nang-cao-phong-do-nam-gioi',
            'image'=>'nang-cao-phong-do-nam-gioi1-290x185.jpg',
            'content'=>'estosterone - chỉ số sức khỏe, sinh lực nam giới

                                Kể từ khi khoa học khám phá ra Testosterone vào năm 1935, hướng đi mới cho lĩnh vực chăm sóc sức khỏe nam giới được mở ra và đến nay vẫn còn nguyên giá trị.
                                
                                Testosterone là hormone quan trọng, quyết định sức khỏe nam giới, chi phối toàn bộ hoạt động của các cơ quan vận mạch và tuần hoàn, hệ thống cơ, xương, khớp, thần kinh, bộ não và đặc biệt là chức năng sinh lý, sinh sản.
                                
                                Sự suy giảm Testosterone sau tuổi 30 thực sự là mối đe dọa lớn đối với sức khỏe toàn thân cũng như đời sống sinh lý nam. Cụ thể, chỉ số Testosterone thấp khiến 91% đàn ông bị giảm ham muốn, 79% rối loạn cương, tăng 50% nguy cơ béo phì, tiểu đường và cao huyết áp…
                                
                                Sinh lý nam - 76
                                
                                Testosterone là hormone quan trọng, quyết định sức khỏe nam giới 
                                
                                PGS-TS Trần Văn Hinh, cho biết, việc bảo vệ và tăng cường nồng độ Testosterone nhằm tăng cường sinh lực, duy trì tốt phong độ và nâng cao chất lượng sống luôn là mối quan tâm hàng đầu của nam giới. Lượng Testosterone nội sinh một khi đạt mức cân bằng và được duy trì ổn định sẽ tác động hài hòa đến các cơ quan, nâng cao sức khỏe toàn thân và nhất là chức năng sinh lý cho phái mạnh.
                                
                                "Khi Luteinizing được hoạt hóa tăng cường một cách tự nhiên, Testosterone nội sinh sẽ được thúc đẩy liên tục và quá trình sinh tổng hợp nội tiết tố nam này được duy trì bền vững với nhu cầu mỗi người ở từng độ tuổi" - PGS-TS Trần Văn Hinh.
                                
                                Cải thiện Testosterone ngay từ quá trình khởi phát
                                
                                Gần đây, sau nhiều nghiên cứu chuyên sâu về Testosterone, các nhà khoa học đã tìm ra Luteinizing, hormone quyết định quá trình khởi phát và điều tiết sản xuất Testosterone của cơ thể.
                                
                                Theo PGS Hinh, Luteinizing được tiết ra từ tuyến yên, nhịp nhàng chỉ huy chu trình sinh tổng hợp Testosterone nội sinh, giúp cho nồng độ hormone nam này được duy trì đúng, đủ với nhu cầu mỗi người và bảo vệ sức khỏe toàn thân cũng như đời sống sinh lý.
                                
                                Bởi vậy, khi Testosterone suy giảm, việc tác động trực tiếp tăng sản sinh Luteinizing tự nhiên được đánh giá là giải pháp vượt trội trong việc ngăn ngừa và cải thiện sinh lực cho nam giới. Cơ chế tác động này an toàn, bền vững khi tuân thủ đúng nguyên tắc của cơ chế nội sinh, nghĩa là giúp cơ thể tự sản sinh ra Testosterone nên phù hợp với sự chuyển hóa tự nhiên của mỗi người.
                                
                                Sinh lý nam - 76
                                
                                Công thức Platinum (có trong Sâm Alipas Platinum) giúp tăng cường Testosterone nội sinh một cách mạnh mẽ
                                
                                Công thức Platinum tăng cường sức khỏe nam giới bền vững
                                
                                “Từ những kết luận về vai trò quan trọng của Luteinizing trong quá trình sinh tổng hợp Testosterone, kết hợp với xu hướng khoa học hiện đại ưu tiên sử dụng các thảo dược từ thiên nhiên, các nhà khoa học Mỹ đã phát minh ra công thức Platinum giúp nâng cao sức khỏe toàn thân phái mạnh an toàn, bền vững” - PGS Hinh cho biết.
                                
                                Theo đó, với sự kết hợp độc đáo gồm tinh chất Eurycoma Longifolia và các thảo dược đặc hiệu dành cho nam giới, công thức Platinum có khả năng làm tăng sinh sản Luteinizing tự nhiên, thúc đẩy sự khởi phát và điều tiết chu trình sinh tổng hợp Testosterone nội sinh tại tế bào Leydig của tinh hoàn.
                                
                                Liệu pháp này khác xa với các cách cường dương cấp tốc tuy “được việc ngay” nhưng không được khuyến khích. Các sản phẩm có tác dụng cải thiện sinh lý trong thời gian ngắn (vài giờ sau khi sử dụng) có cơ chế gây dồn máu cục bộ ở dương vật làm cương cứng khiến nhiều người có thể gặp phải những tai biến nguy hiểm, gây rối loạn cung phản xạ tình dục ở não bộ nam giới khiến họ ngày càng lệ thuộc vào thuốc, lâu ngày có thể gây liệt dương hoàn toàn.
                                
                                Nghiên cứu lâm sàng cho thấy, công thức Platinum giúp tăng 72% lượng Luteinizing và tăng 41% nồng độ Testosterone nội sinh sau 5 ngày sử dụng. Từ đó, nam giới cải thiện sức khỏe nền tảng, tăng cường chất lượng đời sống sinh lý một cách hiệu quả, nhanh chóng nhưng vẫn an toàn.',
            'summary'=>'Tác động trực tiếp đến Luteinizing nhằm thúc đẩy quá trình sinh tổng hợp Testosterone nội sinh một cách an toàn, bền vững được xem là giải pháp nâng cao sức khỏe toàn thân, đời sống sinh lý phái mạnh hiệu quả hiện nay.',
            'cate_id'=>2,
            ],
            ['id'=>5,'title'=>'Tăng cường Luteinizing tự nhiên - Tăng cường nội lực nam giới',
            'slug'=>'tang-cuong-luteinzing-tu-nhien-tang-cuong-noi-luc-nam-gioi',
            'image'=>'2411-LH2-290x185.jpg',
            'content'=>'Sau nhiều công trình nghiên cứu, các nhà khoa học Mỹ đã tìm ra phương thức tăng cường Testosterone nội sinh trong cơ thể nam giới nhanh hơn, bền vững hơn bằng cách phối hợp các thảo dược đặc hiệu có công dụng giúp sản sinh Luteinizing một cách tự nhiên.

                            Luteinizing là một hormone quan trọng được tiết ra từ tuyến yên, nắm giữ vai trò khởi phát và điều tiết chu trình sinh tổng hợp Testosterone nội sinh trong cơ thể phái mạnh.
                            
                            Một khi Luteinizing được hoạt hóa tăng cường một cách tự nhiên, Testosterone nội sinh sẽ được thúc đẩy liên tục và quá trình sinh tổng hợp nội tiết tố nam này được duy trì bền vững với nhu cầu mỗi người ở từng độ tuổi.
                            
                            Chỉ số Testosterone - mối quan tâm lớn của y học
                            
                            Theo quy luật lão hóa tự nhiên cùng nhiều yếu tố tác động khác, nồng độ Testosterone trong cơ thể phái mạnh sẽ giảm dần sau tuổi 30 và giảm mạnh sau tuổi 40, đe dọa nghiêm trọng đến sức khỏe toàn thân cũng như đời sống sinh lý. Nghiên cứu cho thấy, Testosterone thấp dẫn đến quá trình mãn dục nam khiến 91% quý ông giảm ham muốn, 79% rối loạn cương, tăng 52,4% nguy cơ béo phì, 50% nguy cơ tiểu đường, 42,4% nguy cơ cao huyết áp.
                            
                            Do đó, bảo vệ và tăng cường nồng độ Testosterone nhằm tăng cường sinh lực, duy trì tốt phong độ và nâng cao chất lượng sống luôn là mối quan tâm hàng đầu của nam giới. Tuy nhiên, cải thiện nồng độ Testosterone như thế nào cho hiệu quả, tránh được các tác dụng phụ nguy hiểm là vấn đề không dễ dàng. Y học hiện đại đã trải qua nhiều nghiên cứu, phát minh khác nhau để tìm ra giải pháp an toàn, trúng đích cho vấn đề này.
                            
                            Sinh lý nam - 49
                            
                            Công thức Platinum (có trong sâm Alipas Platinum) tác động trực tiếp lên Luteinizing,
                            
                            giúp gia tăng Testosterone nội sinh hiệu quả và bền vững.
                            
                            Kích hoạt Luteinizing điều tiết nồng độ Testosterone
                            
                            Các nghiên cứu y học hiện đại tại các trung tâm lớn như ở Mỹ, châu Âu… về những loại thảo dược dành riêng cho nam giới đã kéo dài trong nhiều thập kỷ qua. Gần đây, công thức Platinum được các nhà khoa học Mỹ phát minh gồm thành phần chính là tinh chất Eurycoma Longifolia (LE:100) kết hợp cùng các thảo dược đặc hiệu dành cho nam giới đã được chứng minh khả năng làm tăng sinh sản Luteinizing tự nhiên, từ đó thúc đẩy sự khởi phát và điều tiết chu trình sinh tổng hợp Testosterone nội sinh tại tế bào Leydig của tinh hoàn.
                            
                            Nghiên cứu lâm sàng cho thấy, công thức Platinum đã giúp tăng 72% nồng độ Luteinizing và tăng 41% nồng độ Testosterone nội sinh chỉ sau 5 ngày sử dụng. Từ đó, nam giới được tăng cường sinh lực, cải thiện sức khỏe nền tảng cũng như bản lĩnh “chinh chiến” vừa hiệu quả, nhanh chóng vì tác động trúng đích, vừa an toàn, bền vững vì tuân thủ đúng nguyên tắc của cơ chế nội sinh, nghĩa là giúp cơ thể tự sản sản sinh nên phù hợp với sự chuyển hóa tự nhiên của mỗi người. 
                            
                            Việc kết hợp tối ưu Eurycoma Longifolia (LE:100) với các loại thảo dược đặc hiệu mang đến nhiều công dụng tốt cho sức khỏe phái mạnh như: Tăng cường sức khỏe sinh lý, sức khỏe nền tảng nam giới; Làm chậm quá trình mãn dục nam; Cải thiện lãnh cảm tình dục, rối loạn cương dương, xuất tinh sớm; Hỗ trợ cải thiện tình trạng vô sinh - hiếm muộn nam; Hỗ trợ điều hòa đường huyết ở người mắc bệnh tiểu đường; Hỗ trợ cải thiện hội chứng chuyển hóa, giảm nguy cơ bệnh tim mạch; Hỗ trợ lợi mật, tăng cường chức năng gan, ...
                            
                            Bên cạnh sử dụng tinh chất quý từ công thức thảo dược đặc hiệu, nam giới cần có chế độ dinh dưỡng đầy đủ, cân đối, sinh hoạt và tập luyện phù hợp, đều đặn… để giúp hệ thống cơ quan nội tiết duy trì tốt chức năng hoạt động.',
            'summary'=>'Sau nhiều công trình nghiên cứu, các nhà khoa học Mỹ đã tìm ra phương thức tăng cường Testosterone nội sinh trong cơ thể nam giới nhanh hơn, bền vững hơn bằng cách phối hợp các thảo dược đặc hiệu có công dụng giúp sản sinh Luteinizing một cách tự nhiên.',
            'cate_id'=>2,
            ],
            ['id'=>6,'title'=>'11 phát hiện thú vị về Testosterone',
            'slug'=>'11-phat-hien-thu-vi-ve-testosterone',
            'image'=>'tang-testosterone-cho-nam-gioi-nhu-the-nao-moi-dung-cach11440066191-290x185.jpg',
            'content'=>'Với thắc mắc các món ăn bài thuốc tăng cường sinh lực theo kiểu dân gian truyền miệng như ngọc dương nấu lẩu, cháo nhung hươu, gan heo nấu trứng gà… có thực sự tốt cho sức khỏe và chuyện ấy không, chúng tôi xin được trả lời chị như sau:

                        Việc ăn uống đóng vai trò hết sức quan trọng trong cuộc sống của mỗi người. Theo đó, để duy trì sức khỏe toàn thân nói chung và sức khỏe tình dục nói riêng, điều quan trọng là cần ăn uống cân bằng giữa các chất đường, đạm, chất béo và các vitamin, khoáng chất. Khi được cung cấp đủ chất dinh dưỡng cơ thể sẽ khỏe mạnh và “chuyện ấy” cũng tốt hơn.
                        
                        Tuy vậy, chúng ta không nên ăn quá nhiều một loại thực phẩm, nhất là những thực phẩm bạn kể có hàm lượng cao cholesterol. Vì như thế sẽ tạo nên sự mất cân bằng dưỡng chất trong cơ thể, đồng thời cơ thể cũng sẽ hấp thu không hết, lượng thực phẩm dư thừa tồn đọng trong người sẽ chuyển hóa thành mỡ – kẻ thù của sức khỏe, từ đó làm suy giảm sức khỏe sinh lý.
                        
                        Cụ thể các món ăn nấu từ gan heo, trứng gà (đặc biệt là lòng đỏ), tinh hoàn động vật… là những thực phẩm rất giàu cholesterol (trong 100g lòng đỏ trứng gà chứa tới 1.234mg cholesterol, 100g gan heo chứa 564 mg cholesterol). Nếu chúng ta ăn thường xuyên, mỗi ngày có thể làm tăng cholesterol xấu trong máu, ảnh hưởng đến sức khỏe, làm tăng huyết áp, bệnh tim mạch, đột quỵ
                        
                        Còn với nhung hươu (lộc nhung), theo y học cổ truyền đây là một loại thực phẩm có tác dụng sinh tinh, bổ tủy, ích huyết; giúp khỏe gân xương…. Còn Tây y thì cho rằng nhung hươu giúp tăng cường sức mạnh cơ bắp, làm cho tinh thần sảng khoái, ăn ngủ tốt,... nhưng nếu lạm dụng có thể gây hạ huyết áp, làm tim co bóp mạnh, đập nhanh, giật cơ, co giật hay đông huyết. Chống chỉ định với người gầy, béo phì, người đang hoặc có nguy cơ, tiền sử mắc bệnh cao huyết áp, tim mạch.
                        
                        Ngay cả khi ăn chúng một cách điều độ thì những món ấy có thể cũng chỉ là mẹo dân gian được truyền miệng, không có cơ sở khoa học nên không thể khẳng định chúng là những món ăn bài thuốc giúp tăng cường sinh lực đàn ông, phục hồi “chuyện ấy”. Vì cho tới nay, chưa có một bằng chứng khoa học nào khẳng định các món ăn ấy có thể làm tăng cường và phục hồi chức năng tình dục ở nam giới, có chăng chỉ là việc ăn uống hợp lý, cân bằng giúp bảo vệ sức khoẻ và phòng tránh bệnh tật.',
            'summary'=>'Vì sao mùa cưới thường vào mùa đông, yêu đơn phương không gây hưng phấn, nguyên nhân gây "lệch pha" nam nữ, điều gì giúp nam giới tăng “bản lĩnh” … là những phát hiện thú vị liên quan đến Testosterone mà bạn có thể chưa biết.',
            'cate_id'=>2,
            ],


            ['id'=>7,'title'=>'Bí quyết giúp làm đẹp da tự nhiên, chăm sóc da toàn diện',
            'slug'=>'bi-quyet-giup-lam-dep-da-tu-nhien-cham-soc-da-toan-dien',
            'image'=>'angela1-290x185.jpg',
            'content'=>'Muốn có làn da đẹp và trẻ lâu, bạn cần biết cách chăm sóc da cho mình ngay từng khi mới bước vào tuổi 20, như chống nắng, giữ da sạch sẽ, uống đủ nước... Khi bạn 30 hoặc hơn thế nữa, càng phải biết vấn đề của da bạn hiện đang trong tình trạng nào, cần làm đẹp da mặt và da toàn thân theo cách nào để giữ được sự thanh xuân tươi trẻ cho da, đặc biệt là không làm tổn thương da hơn nữa khi mà làn da đã phải gánh chịu nhiều tác nhân gây hại khiến gia nhanh chóng già cỗi, kém mịn màng.

                                    I. 3 VẤN ĐỀ VỀ DA PHỤ NỮ THƯỜNG GẶP KHI BẠN 30
                                    Sau tuổi 30 phụ nữ thường phải đối mặt với tình trạng làn da “xuống cấp”, sự lão hoá da biểu hiện rõ qua 3 dấu hiệu sau đây:
                                    
                                    Sinh lý nữ - 56
                                    
                                    Lớp da không được săn chắc, bị chùng nhão, hình thành nhiều nếp gấp sâu không chỉ ở vùng mắt, khóe miệng, trán mà thậm chí toàn thân như da cổ, ngực, tay, chân và bụng. Đây không phải chỉ đơn thuần do bạn không chọn đúng loại kem dưỡng da hay do thiếu độ ẩm cần thiết khiến da hình thành nếp nhăn như vẫn thường nghe, mà chính là hậu quả của việc thiếu hụt các protein dạng sợi (laminin, elastin, collagen, fibronectin) trong cấu trúc nền của da (Extracellular Matrix), là những thành phần quan trọng quyết định sự săn chắc và căng sáng của làn da.
                                    
                                    Sinh lý nữ - 55
                                    
                                    Hiểu một cách đơn giản là da đang bị thiếu độ ẩm trầm trọng và mất tính đàn hồi.. Bạn có thể thử độ đàn hồi của da bằng cách dùng tay tạo nếp gấp cho da và buông tay ra, sau đó sẽ thấy da không nhanh chóng trở lại bình thường như khi chúng ta còn trẻ, nếp gấp vẫn rõ ràng trong vài chục giây thậm chí là vài phút. Đây chính là kết quả của sự thiếu hụt các phân tử giữ nước proteoglycans trong cấu trúc nền của da. Các phân tử proteoglycans có tác dụng dưỡng ẩm cho da. Da khô rất dễ nhận biết, không chỉ riêng da mặt mà những vùng da khác như da cổ, tay, chân sờ vào cảm thấy thô ráp, không mềm mịn, khi trời lạnh hoặc sau khi rửa mặt, da bong tróc nhiều ở cánh mũi, trán, cằm đôi khi có cảm giác căng rát khó chịu, các nếp nhăn có khuynh hướng nhìn rõ hơn.
                                    
                                    Sinh lý nữ - 55
                                    
                                    Rất dễ nhận biết, nhìn vào gương thấy rõ những vùng da bị tối, xỉn màu, tạo rõ sự tương phản, mất cân bằng sắc da. Các vùng da dễ bị sạm là vùng mắt, hai gò má, vòng tròn quanh miệng, vùng chữ V ở cổ và ngực, do thường xuyên phải tiếp xúc với tia tử ngoại và chất bẩn trong môi trường. Tia cực tím khi tiếp xúc với da sẽ kích thích các tế bào sắc tố tăng sản sinh hắc tố khiến da bị sạm đi, xỉn màu. Đồng thời, kích thích các tế bào trong da sản sinh nhiều men phá hủy cấu trúc nền (MMPs) khiến cho da càng thêm “xuống cấp”.',
            'summary'=>'Làn da đẹp cần có đủ độ ẩm, tính đàn hồi, mặt da láng mịn, căng sáng thể hiện sức khỏe, vẻ đẹp và sự tươi trẻ của người phụ nữ. Vậy bí quyết nào để có được làn da đẹp như thế trong khi tuổi tác, ánh nắng mặt trời và các yếu tố gây hại khác không ngừng tấn công làn da chúng ta mỗi ngày?',
            'cate_id'=>3,
            ],
            ['id'=>8,'title'=>'Hiểu về lão hóa da và phương pháp chống lão hóa da hiệu quả',
            'slug'=>'hieu-ve-lao-hoa-da-va-phuong-phap-chong-lao-hoa-da',
            'image'=>'clhd3-290x185.jpg',
            'content'=>'Dưới góc độ khoa học, da đã âm thầm chịu sự tác động của các yếu tố như tuổi tác, ánh nắng, ô nhiễm môi trường, stress,… tấn công và gây hại từ độ tuổi 20, nhưng chưa biểu hiện rõ ràng.

                        Từ sau tuổi 30, những dấu hiệu lão hóa da như nếp nhăn, khô, mảng sạm, da chùng, mất độ đàn hồi mới biểu hiện rõ và dễ dàng nhận thấy bằng mắt thường khiến nhiều phụ nữ mất tự tin.
                        
                        Những thông tin cần thiết dưới đây sẽ giúp phụ nữ có cái nhìn tổng quan về lão hóa da và có phương pháp chống lão hóa da hiệu quả.
                        
                        I. LÃO HÓA LÀ GÌ ?
                        Lão hóa da là quá trình suy giảm các chức năng của làn da, tuần hoàn máu và hệ bạch huyết suy giảm, làm hủy hoại cấu trúc nền của da, làm suy yếu mao mạch dưới da, độc tố không đào thải được ra ngoài.
                        
                        Sinh lý nữ - 54
                        
                        II. NGUYÊN NHÂN GÂY LÃO HÓA DA?
                        Sau tuổi 30, hệ trục “vàng” Não bộ - Tuyến yên – Buồng trứng suy giảm hoạt động làm rối loạn bộ hormone nữ (Estrogen, Progesterone, Testosterone) dẫn đến những trục trặc về sức khỏe, sinh lý, đặc biệt là sự xuống cấp của làn da. Song song đó, làn da còn chịu tác hại của tia cực tím từ ánh nắng mặt trời và các yếu tố bên ngoài khác làm cơ thể sản xuất nhiều chất độc hại Ros (Reactive Oxygen Spcecies), từ đó, men tiêu hủy cấu trúc nền MMPs cũng sản sinh nhiều và tăng cường phá hủy cấu trúc protein dạng sợi (Collagen, Elastin, Laminin, Fibronectin) làm hư hại cấu trúc nền. Đây là nguyên nhân chính khiến da bị lão hóa.',
            'summary'=>'Hiểu về lão hóa da và phương pháp chống lão hóa da hiệu quả',
            'cate_id'=>3,
            ],
            ['id'=>9,'title'=>'Cấu trúc nền của da',
            'slug'=>'cau-truc-nen-cua-da',
            'content'=>'Da đảm nhận các chức năng như bảo vệ, điều hòa nhiệt độ cơ thể, tổng hợp vitamin D, bài tiết chất cặn bã… và là tấm gương phản chiếu trung thực sức khỏe và nhan sắc của người phụ nữ. Ở độ tuổi ngoài 30, làn da bắt đầu hư tổn và suy yếu, điều này thường khiến phụ nữ trông già hơn tuổi thật của mình.

            Sinh lý nữ - 45	
            Da gồm 3 lớp: thượng bì, bì, hạ bì.. Trong đó, các mô liên kết ở lớp bì tạo thành một kết cấu lớn nhất và quan trọng nhất của da gọi là CẤU TRÚC NỀN (Extracellular Matrix = ECM)
            
            Thành phần của CẤU TRÚC NỀN của da bao gồm:
            
            Cấu trúc protein dạng sợi: Collagen, Elastin, Laminin, Fibronectin
            Thành phần khác: Proteoglycan  (dermatan sulfate, hyaluronan)',
            'image'=>'cautrucnencuada-290x185.jpg',
            'summary'=>'Cấu trúc nền suy sụp làm da nhăn, khô, sạm, lão hoá nhanh.',
            'cate_id'=>3,
            ],
        ]);




        

        DB::table('questions')->delete();
        DB::table('questions')->insert([
            ['id'=>1,'title'=>'Đang dùng collagen thì có thể dùng thêm Sâm Angela Gold không?','slug'=>'dang-dung-collagen-thi-co-the-dung-them-sam-angela-gold-duoc-khong','image'=>'chong-nang-tu-thien-nhien-03_(Copy).jpg','cate_id'=>1,],
            ['id'=>2,'title'=>'Uống Sâm Angela Gold có làm tăng estrogen, tăng nguy cơ ung thư không?','slug'=>'uong-sam-angela-gold-co-lam-tang-estogen-tang-nguy-co-ung-thu-khong','image'=>'ANGELA_5-290x185.jpg','cate_id'=>1,],
            ['id'=>3,'title'=>'Vợ bị giảm ham muốn, đau khi quan hệ. Sâm Angela Gold cải thiện vấn đề này cho phụ nữ ra sao?','slug'=>'vo-bi-giam-ham-muon-dau-khi-quan-he-sam-angela-gold-cai-thien-van-de-nay-cho-phu-nu-ra-sao','image'=>'ANGELA_s3-290x185.jpg','cate_id'=>1,],
            
            ['id'=>4,'title'=>'Cơ thể bình thường, có thể dùng Sâm Alipas Platinum để duy trì sức khỏe và sinh lý không?','slug'=>'co-the-binh-thuong-co-the-dung-sam-alipas-platinum-de-duy-tri-suc-khoe-sinh-ly-khong','image'=>'sam-alipas-platinum-4.jpg','cate_id'=>2,],
            ['id'=>5,'title'=>'Nam giới ngoài tuổi 50, dùng Sâm Alipas Platinum có an toàn với người có tuổi?','slug'=>'nam-gioi-ngoai-tuoi-50-dung-sam-alipas-platinum-co-an-toan-voi-nguoi-co-tuoi','image'=>'sam-alipas-platinum-5-290x185.jpeg','cate_id'=>2,],
            ['id'=>6,'title'=>'Nam giới bị huyết áp cao, tiểu đường, bệnh tim mạch… dùng Sâm Alipas Platinum được không?','slug'=>'nam-gioi-bi-huyet-ap-cao-tieu-duong-benh-tim-mach-dung-sam-alipas-duoc-khong','image'=>'sam-alipas-platinum-3-290x185.jpg','cate_id'=>2,],

            ['id'=>7,'title'=>'Không cần giảm cân, chỉ muốn giữ cân thì uống LIC có được không?','slug'=>'khong-can-giam-can-chi-muon-giu-can-thi-uong-lic-duoc-khong','image'=>'benh nguy hiem 5.jpg','cate_id'=>3,],
            ['id'=>8,'title'=>'Bị cao huyết áp và tiểu đường có dùng được LIC không?','slug'=>'bi-cao-huyet-ap-va-tieu-duong-co-dung-duoc-lic-khong','image'=>'giai-bai-toan-giam-can-an-toan-bang-3-nguyen-tac-vang-1-290x185.jpg','cate_id'=>3,],
            ['id'=>9,'title'=>'LIC có ảnh hưởng gì đến việc sinh con không? Ngưng dùng trong bao lâu thì có thể có con?','slug'=>'lic-co-anh-huong-gi-den-viec-sinh-con-khong-ngung-dung-trong-bao-lau-thi-co-the-co-con','image'=>'EmptyName 8-290x185.jpg','cate_id'=>3,],

            ['id'=>10,'title'=>'Jex Max có hỗ trợ cải thiện bệnh xương khớp cho người bị đau nhức khớp kinh niên không?','slug'=>'jex-max-co-ho-tro-cai-thien-benh-xuong-khop-cho-nguoi-bi-dau-nhuc-khop-kinh-nien-khong','image'=>'2744-voi-hoa-cot-song_(2)-290x185.jpg','cate_id'=>4,],
            ['id'=>11,'title'=>'Dùng Jex Max thường xuyên có an toàn với người trung niên, cao tuổi?','slug'=>'dung-lex-max-thuong-xuyen-co-an-toan-voi-nguoi-trung-nien-cao-tuoi','image'=>'jexmax (2)-290x185.jpg','cate_id'=>4,],
            ['id'=>12,'title'=>'Jex Max có dùng được cho người đau bao tử, mắc bệnh huyết áp, gan, thận...?','slug'=>'jex-max-co-dung-duoc-cho-nguoi-dau-bao-tu-mac-benh-huyet-ap-gan-than','image'=>'JEX_5 (Copy)-290x185.jpg','cate_id'=>4,],


            ['id'=>13,'title'=>'Bị viêm gan B mãn tính, nên uống Hewel liều lượng bao nhiêu để phòng xơ gan hiệu quả?','slug'=>'bi-viem-gan-b-man-tinh-nen-uong-hewel-lieu-luong-bao-nhieu-de-phong-xo-gan-hieu-qua','image'=>'sl1-290x185.jpg','cate_id'=>5,],
            ['id'=>14,'title'=>'Sử dụng Hewel có giúp cải thiện gan nhiễm mỡ hiệu quả không?','slug'=>'su-dung-hewel-co-giup-cai-thien-gan-nhiem-mo-hieu-qua-khong','image'=>'EmptyName 10-290x185.jpg','cate_id'=>5,],
            ['id'=>15,'title'=>'Có thể dùng Hewel để giải độc và ngăn ngừa ung thư từ thực phẩm bẩn được không?','slug'=>'co-the-dung-hewel-de-giai-doc-va-ngan-ngua-ung-thu-tu-thuc-pham-duoc-khong','image'=>'viem-gan-a4-290x185.jpg','cate_id'=>5,],
        ]); 







    }




}
