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
            ['id'=>1,'name'=>'Nguyễn Hữu TIến','email'=>'tiennguyenhuu@gmail.com','question'=>'Chào chuyên gia, em năm nay 25 tuổi, làm công việc thiết kế đồ họa. Công việc của em là thường xuyên tiếp xúc với màn hình vi tính (khoảng 10h/ ngày), lại phải ngồi trong môi trường máy lạnh nên da bị khô. Em nghe nói, ngồi máy lạnh và nhìn màn hình vi tính nhiều sẽ làm cho da xấu đi, nhanh bị lão hóa. Cho em hỏi, ở độ tuổi của em có nên dùng kem chống lão hóa da không? Em cảm ơn','status'=>1],
            ['id'=>2,'name'=>'Nguyễn Hữu Toàn','email'=>'toannguyenhuu@gmail.com','question'=>'Chào chuyên gia, Tôi năm nay 28 tuổi, 2 tháng trước tôi thường thức khuya để làm việc, cũng từ đó tôi có thói quen ăn đêm. Hiện tại tôi đã bị tăng cần và mặc dù đã tranh thủ đi ngủ sớm nhưng hầu như đêm nào tôi cũng trằn trọc đến 2, 3 giờ sáng mới ngủ được. Tôi xin hỏi có cách nào để tôi có thể ngủ sớm trở lại và không bị mất ngủ nữa được không ạ?','status'=>1],
            ['id'=>3,'name'=>'Nguyễn Hữu Hoàng','email'=>'hoangnguyenhuu@gmail.com','question'=>' Chào chuyên gia, tôi và chồng bị viễn thị, con tôi bị cận thị 6 độ. Tôi thấy trên thị trường hiện nay quảng cáo nhiều loại thuốc bổ mắt có tác dụng giúp sáng mắt, hỗ trợ cải thiện thị lực nhưng không biết là có thể giúp viễn thị và cận thị giảm độ và nhìn rõ hơn không? Xin chuyên gia tư vấn cách chọn thuốc. (Thanh Trúc - Bình Thạnh) ','status'=>1],
          
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


            DB::table('shipping')->delete();
            Db::table('shipping')->insert(
                 ['id'=>1, 'content'=>'<p>mail/sms về th&ocirc;ng tin đơn h&agrave;ng trong thời gian sớm nhất.</p>

                 <p>Hiện tại Ecogreen hợp t&aacute;c với ViettelPost - đơn vị chuyển ph&aacute;t h&agrave;ng đầu tại Việt Nam để thực hiện chuyển ph&aacute;t c&aacute;c sản phẩm tới Qu&yacute; kh&aacute;ch h&agrave;ng.</p>
                 
                 <p>&nbsp;</p>
                 
                 <p>Sau khi x&aacute;c nhận th&agrave;nh c&ocirc;ng, đơn h&agrave;ng sẽ được giao đến Qu&yacute; kh&aacute;ch trong khoảng thời gian sau đ&acirc;y:</p>
                 
                 <p>&nbsp;</p>
                 
                 <table>
                     <tbody>
                         <tr>
                             <td>Địa chỉ giao h&agrave;ng</td>
                             <td>Thời gian giao h&agrave;ng</td>
                         </tr>
                         <tr>
                             <td>Th&agrave;nh phố Hồ Ch&iacute; Minh v&agrave; H&agrave; Nội</td>
                             <td>6 - 24h l&agrave;m việc</td>
                         </tr>
                         <tr>
                             <td>C&aacute;c khu vực tỉnh, th&agrave;nh c&ograve;n lại</td>
                             <td>2 - 4 ng&agrave;y l&agrave;m việc</td>
                         </tr>
                     </tbody>
                 </table>
                 
                 <p>*Lưu &yacute;: thời gian giao h&agrave;ng dự kiến ở tr&ecirc;n chỉ &aacute;p dụng cho c&aacute;c đơn h&agrave;ng trong nước.</p>
                 
                 <p>&nbsp;</p>
                 
                 <p>Tất cả c&aacute;c đơn h&agrave;ng từ khắp cả nước sẽ được chia l&agrave;m 2 khu vực v&agrave; ph&iacute; vận chuyển &aacute;p dụng cho tất cả c&aacute;c đơn h&agrave;ng của Qu&yacute; kh&aacute;ch (trong đ&oacute;, Ecogreen đ&atilde; hỗ trợ 50-70% chi ph&iacute; giao h&agrave;ng v&agrave; ph&iacute; thu tiền hộ):</p>
                 
                 <p>&nbsp;</p>
                 
                 <p>Khu vực 1:&nbsp;Th&agrave;nh phố Hồ Ch&iacute; Minh v&agrave; H&agrave; Nội l&agrave; 10.000đ/đơn h&agrave;ng bất kỳ</p>
                 
                 <p>Khu vực 2:&nbsp;C&aacute;c tỉnh, th&agrave;nh phố c&ograve;n lại tr&ecirc;n to&agrave;n quốc l&agrave; 20.000đ/đơn h&agrave;ng bất kỳ</p>
                 
                 <p>&nbsp;</p>
                 
                 <table>
                     <tbody>
                         <tr>
                             <td>Qu&yacute; kh&aacute;ch h&agrave;ng lưu &yacute; lu&ocirc;n lu&ocirc;n kiểm tra kĩ t&igrave;nh trạng sản phẩm sau khi nhận được ngay tại thời điểm nhận h&agrave;ng v&agrave; c&oacute; sự chứng kiến của nh&acirc;n vi&ecirc;n giao h&agrave;ng. C&aacute;c vấn đề như bể vỡ, vỏ hộp chai thuốc bị r&aacute;ch n&aacute;t hoặc seal đ&atilde; bị mở, &hellip; Tất cả những sự cố n&agrave;y sẽ chỉ được đổi trả nếu do lỗi từ ph&iacute;a nh&acirc;n vi&ecirc;n của Ecogreen v&agrave; đơn vị vận chuyển ViettelPost.</td>
                         </tr>
                     </tbody>
                 </table>
                 
                 <p>Trong qu&aacute; tr&igrave;nh giao h&agrave;ng c&oacute; thể ph&aacute;t sinh những vấn đề ngo&agrave;i &yacute; muốn về ph&iacute;a Kh&aacute;ch h&agrave;ng khiến việc giao h&agrave;ng bị chậm trễ. Ecogreen sẽ linh động giải quyết cho Kh&aacute;ch h&agrave;ng trong từng trường hợp như sau:</p>
                 
                 <p>- Kh&aacute;ch h&agrave;ng kh&ocirc;ng cung cấp ch&iacute;nh x&aacute;c v&agrave; đầy đủ địa chỉ giao h&agrave;ng v&agrave; số điện thoại li&ecirc;n lạc.</p>
                 
                 <p>- Kh&aacute;ch h&agrave;ng kh&ocirc;ng sẵn s&agrave;ng để nhận h&agrave;ng v&agrave;o thời điểm giao h&agrave;ng.</p>
                 
                 <p>- Ecogreen đ&atilde; giao h&agrave;ng đ&uacute;ng hẹn theo th&ocirc;ng tin giao h&agrave;ng nhưng kh&ocirc;ng li&ecirc;n lạc được với Kh&aacute;ch h&agrave;ng v&agrave; chờ tại địa điểm giao h&agrave;ng qu&aacute; 10 ph&uacute;t, mọi nỗ lực của nh&acirc;n vi&ecirc;n giao h&agrave;ng nhằm li&ecirc;n hệ với Kh&aacute;ch h&agrave;ng đều kh&ocirc;ng th&agrave;nh c&ocirc;ng.</p>
                 
                 <p>- Những trường hợp bất khả kh&aacute;ng như thi&ecirc;n tai, tai nạn giao th&ocirc;ng, gi&aacute;n đoạn mạng lưới giao th&ocirc;ng, đứt c&aacute;p, hệ thống bị tấn c&ocirc;ng.</p>
                 
                 <p>C&aacute;c trường hợp kh&aacute;c: Trong trường hợp xảy ra sự cố phức tạp hơn, Ecogreen bảo đảm quyền lợi lớn nhất thuộc về Kh&aacute;ch h&agrave;ng.</p>
                 
                 <p>&nbsp;</p>
                 
                 <blockquote>THANH TO&Aacute;N</blockquote>
                 
                 <p>Ecogreen hỗ trợ 4 phương thức thanh to&aacute;n cho tất cả c&aacute;c đơn h&agrave;ng tr&ecirc;n hệ thống.</p>
                 
                 <p>&nbsp;</p>
                 
                 <p>1. Thanh to&aacute;n khi nhận h&agrave;ng (COD): Qu&yacute; kh&aacute;ch sẽ thanh to&aacute;n tiền mặt cho nh&acirc;n vi&ecirc;n giao h&agrave;ng ngay sau khi nhận được h&agrave;ng.</p>
                 
                 <p>2. Thanh to&aacute;n bằng Internet Banking: Thẻ/t&agrave;i khoản ATM của qu&yacute; kh&aacute;ch c&oacute; đăng k&iacute; sử dụng dịch vụ internet banking</p>
                 
                 <p>3. Thanh to&aacute;n bằng thẻ quốc tế Visa, Master Card</p>
                 
                 <p>4. Chuyển khoản trực tiếp tại ng&acirc;n h&agrave;ng.</p>
                 
                 <p>&nbsp;</p>
                 
                 <p>Mọi thắc mắc v&agrave; g&oacute;p &yacute; vui l&ograve;ng li&ecirc;n hệ Hotline Chăm s&oacute;c kh&aacute;ch h&agrave;ng:&nbsp;(028) 38115118</p>'
                 ]);
                 DB::table('commitment')->delete();
                 DB::table('commitment')->insert(
                     ['id'=>1, 'content'=>'<p><strong>Cam kết b&aacute;n h&agrave;ng tại Ecogreen được x&acirc;y dựng dựa tr&ecirc;n uy t&iacute;n v&agrave; sứ mệnh mang đến những sản phẩm chất lượng, tốt nhất cho kh&aacute;ch h&agrave;ng.</strong></p>

                     <ul>
                         <li>Mang đến cho kh&aacute;ch h&agrave;ng sản phẩm ch&iacute;nh h&atilde;ng, c&oacute; tem bảo h&agrave;nh v&agrave; nguồn gốc xuất xứ, l&ocirc; sản xuất v&agrave; hạn sử dụng đầy đủ.</li>
                         <li>Ho&agrave;n tiền 100% cho kh&aacute;ch h&agrave;ng nếu sản phẩm bị thất lạc, sai s&oacute;t từ ph&iacute;a Ecogreen dẫn đến giao dịch kh&ocirc;ng th&agrave;nh c&ocirc;ng hoặc sản phẩm bị hư hỏng, bể vỡ do lỗi của Ecogreen.</li>
                         <li>Lu&ocirc;n cung cấp sản phẩm đ&uacute;ng chất lượng như h&igrave;nh ảnh v&agrave; th&ocirc;ng tin đăng tải theo đ&uacute;ng mức gi&aacute; được ni&ecirc;m yết.</li>
                         <li>Giữ b&iacute; mật tuyệt đối th&ocirc;ng tin của kh&aacute;ch h&agrave;ng, kh&ocirc;ng chia sẻ cho c&aacute;c c&aacute; nh&acirc;n v&agrave; tổ chức kh&aacute;c.</li>
                         <li>B&aacute;n đ&uacute;ng gi&aacute; tại các nh&agrave; thuốc Eco (chưa bao gồm ph&iacute; giao h&agrave;ng).</li>
                         <li>Giao h&agrave;ng tận nơi tr&ecirc;n to&agrave;n quốc.</li>
                         <li>Cam kết bảo mật th&ocirc;ng tin c&aacute; nh&acirc;n của tất cả kh&aacute;ch h&agrave;ng.</li>
                     </ul>
                     
                     <p><strong>Th&ocirc;ng tin của kh&aacute;ch h&agrave;ng sẽ được Ecogreen sử dụng với những c&ocirc;ng việc được đưa ra trong ch&iacute;nh s&aacute;ch n&agrave;y.</strong></p>
                     
                     <ul>
                         <li>Ecogreen chỉ sử dụng th&ocirc;ng tin của kh&aacute;ch h&agrave;ng trong thời gian m&agrave; ph&aacute;p luật cho ph&eacute;p v&agrave; chỉ phục vụ cho giao dịch giữa 2 b&ecirc;n.</li>
                         <li>Th&ocirc;ng tin của kh&aacute;ch h&agrave;ng tuyệt đối sẽ kh&ocirc;ng được mua b&aacute;n hay chuyển giao cho b&ecirc;n thứ 3.</li>
                     </ul>
                     
                     <p><strong>Th&ocirc;ng tin kh&aacute;ch h&agrave;ng m&agrave; ch&uacute;ng t&ocirc;i thu thập v&agrave; do kh&aacute;ch h&agrave;ng đồng &yacute; cung cấp gồm:</strong></p>
                     
                     <ol>
                         <li>T&ecirc;n kh&aacute;ch h&agrave;ng</li>
                         <li>Số điện thoại li&ecirc;n hệ</li>
                         <li>Email (nếu c&oacute;)</li>
                         <li>Địa chỉ giao nhận</li>
                     </ol>
                     
                     <p><strong>C&aacute;c th&ocirc;ng tin tr&ecirc;n được Ecogreen sử dụng v&agrave;o c&aacute;c mục đ&iacute;ch:</strong></p>
                     
                     <ul>
                         <li>Li&ecirc;n lạc với kh&aacute;ch h&agrave;ng để x&aacute;c minh đơn đặt h&agrave;ng.</li>
                         <li>Th&ocirc;ng b&aacute;o về việc giao h&agrave;ng v&agrave; hỗ trợ kh&aacute;ch h&agrave;ng.</li>
                         <li>Xử l&yacute; đơn h&agrave;ng của kh&aacute;ch h&agrave;ng tr&ecirc;n hệ thống</li>
                         <li>Ecogreen sẽ chia sẻ th&ocirc;ng tin kh&aacute;ch h&agrave;ng (Địa chỉ nhận h&agrave;ng v&agrave; số điện thoại liện hệ) với c&ocirc;ng ty chuyển ph&aacute;t nhanh để phục vụ cho việc giao h&agrave;ng tới qu&yacute; kh&aacute;ch.</li>
                     </ul>
                     
                     <p><strong>Bảo mật th&ocirc;ng tin c&aacute; nh&acirc;n kh&aacute;ch h&agrave;ng</strong></p>
                     
                     <p>Ecogreen đảm bảo tất cả mọi th&ocirc;ng tin của kh&aacute;ch h&agrave;ng sẽ được bảo mật tuyệt đối v&agrave; sử dụng đ&uacute;ng mục đ&iacute;ch.</p>
                     
                     <p>Sau khi đ&atilde; ho&agrave;n th&agrave;nh giao dịch th&ocirc;ng tin kh&aacute;ch h&agrave;ng sẽ được ch&uacute;ng t&ocirc;i x&oacute;a khỏi hệ thống chỉ lưu lại c&aacute;c th&ocirc;ng tin cần thiết để hỗ trợ kh&aacute;ch h&agrave;ng dịch vụ về sau.</p>
                     
                     <p>&nbsp;</p>
                     
                     <p><strong>Ch&iacute;nh s&aacute;ch bảo mật tại Ecogreen</strong></p>
                     
                     <ul>
                         <li>Ecogreen c&oacute; thể thay đổi ch&iacute;nh s&aacute;ch bảo mật v&agrave; mọi thay đổi sẽ được c&ocirc;ng khai tr&ecirc;n website Ecogreen.com.vn</li>
                         <li>Tất cả c&aacute;c thay đổi về ch&iacute;nh s&aacute;ch bảo mật ch&uacute;ng t&ocirc;i đều tu&acirc;n thủ theo quy định của Ph&aacute;p Luật Nh&agrave; Nước hiện h&agrave;nh.</li>
                         <li>Mọi &yacute; kiến thắc mắc, khiếu nại v&agrave; tranh chấp vui l&ograve;ng li&ecirc;n hệ với ch&uacute;ng t&ocirc;i qua hotline:&nbsp;<strong>(028) 38 115118</strong></li>
                     </ul>  '
                 ]);


    }




}
