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




    }




}
