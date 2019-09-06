@extends('master-layout')
@section('title')
Tư vấn sức khỏe
@endsection



@section('css')
	<link rel="stylesheet" href="{{ asset('css/khuyenmai.css')}}">
@endsection
@section('content')
<div class="container">
			<div class="tc-km">
				<ul class="tool-menu">
					<li class="list-menu">
						<a class="title-1" href="">Trang Chủ</a>&nbsp;
					</li>
					<li class="list-menu"><i class="fas fa-chevron-right" style="font-size: 12px"></i></li>&nbsp;
					<li class="list-menu">
						<a class="title-1" href="{{route('tu-van-suc-khoe')}}">Tư Vấn Sức Khỏe</a>
					</li>
				</ul>
				<div class="space"></div>
			</div>
			<main>
				<div class="row">
					<div class="col-md-3 ">
						<div class="km-left">
							<div class="bt-list-1">
								<button class="accordion">TÌM THEO THƯƠNG HIỆU</button>
								<div class="panel">
									<ul class="tool-thuoc">
										<li><a class="list-thuoc" href="">abcac</a></li>
										<li><a class="list-thuoc" href="">abcac</a></li>
										<li><a class="list-thuoc" href="">abcac</a></li>
									</ul>
									
									
								</div>

								<button class="accordion">TÌM THEO BỆNH</button>
								<div class="panel">
									<ul class="tool-thuoc">
										<li class="list-thuoc"><a class="list-thuoc" href="">abcac</a></li>
										<li class="list-thuoc"><a class="list-thuoc" href="">abcac</a></li>
										<li class="list-thuoc"><a class="list-thuoc" href="">abcac</a></li>
									</ul>
								</div>

								<button class="accordion">TÌM THEO GIÁ</button>
								<div class="panel">
									<ul class="tool-thuoc">
										<li class="list-thuoc"><a class="list-thuoc" href="">abcac</a></li>
										<li class="list-thuoc"><a class="list-thuoc" href="">abcac</a></li>
										<li class="list-thuoc"><a class="list-thuoc" href="">abcac</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="img-cg">
							<img class="chuyen-gia" src="images/lady-doctor.png" alt="">
						</div>
						<a class="hoi-chuyengia" href="">hỏi chuyên gia</a>
						<div class="dk-tv">
							<div class="full-dk">
								<h2 class="title-dk">đăng ký thành viên</h2>
								<p class="text-dk">Để nhận được ưu đãi đặc biệtvà bản tin sức khỏe hữu ích</p>
								<input type="text" placeholder="Nhập địa chỉ Emai"><br>
								<a class="bt-dky" href="">đăng ký</a>
							</div>
						</div>
						
					</div>
					<div class="col-md-9 km-right">
						<b style="color: blue">Gửi câu hỏi của bạn
							</b>
						<form>
							<input type="text" name="" placeholder="Nhập Họ Và Tên">
							<input type="text" name="" placeholder="Nhập Mail"><br>
							<p><br><textarea name="" style="width: 100%;
							    max-width: 650px;
							    height: 200px;
							    background: #fff;
							    margin-bottom: 10px;
							    border: 1px solid #ccc;"></textarea></p>
							   
							    <input class="btn-danger btn" type="submit" placeholder="Gửi" name="">
						</form>
						<b style="color: blue">Gửi câu hỏi của bạn
							</b>
							<p><a href="#" title="">
      Chào chuyên gia, em năm nay 25 tuổi, làm công việc thiết kế đồ họa. Công việc của em là thường xuyên tiếp xúc với màn hình vi tính (khoảng 10h/ ngày), lại phải ngồi trong môi trường máy lạnh nên da bị khô. Em nghe nói, ngồi máy lạnh và nhìn màn hình vi tính nhiều sẽ làm cho da xấu đi, nhanh bị lão hóa. Cho em hỏi, ở độ tuổi của em có nên dùng kem chống lão hóa da không? Em cảm ơn. (Phương Trà, Bình Dương).</a></p>
      <p>Trung Tâm Tư Vấn Y Khoa :  

</p>
<p>Chào bạn Phương Trà, với thắc mắc của bạn về việc có nên dùng kem chống lão hóa da ở tuổi 25 không, chúng tôi xin trả lời bạn như sau</p>
<p>Lão hóa da là một quá trình tự nhiên của cơ thể và diễn ra âm thầm ngay ở những năm tuổi 20. Tuy nhiên, ở độ tuổi này, quá trình lão hóa da diễn ra chậm và thường ít có biểu hiện ra ngoài. Nhưng đến những năm sau tuổi 30 tình trạng da nhăn, khô, sạm sẽ hiện rõ vì lúc này cấu trúc nền của da đã bị hư tổn, các protein dạng sợi (elastin, laminin, collagen, fibronectin) và phân tử giữ nước dưỡng ẩm proteoglycans bị hao hụt, mất tính liên kết khiến da mất đi sự săn chắc, mịn màng.</p>
<p>Bạn năm nay 25 tuổi, xuất hiện tình trạng khô da, điều này khởi nguồn cho quá trĩnh lão hóa da. Nguyên nhân là do lão hóa tự nhiên của cơ thể, song song đó lại chịu sự tác động của yếu tố bên ngoài, đặc biệt là làm việc trong môi trường máy lạnh và tiếp xúc nhiều với màn hình vi tính.</p>
<p>Máy lạnh làm giảm nhiệt độ và độ ẩm không khí xuống thấp khiến cho da mất đi một lượng nước cần thiết, không đủ duy trì độ ẩm dẫn đến khô da. Trong khi đó, lượng điện tích sản sinh từ máy tính như một chất xúc tác khiến da hấp thụ nhiều bụi bẩn trong không khí có thể làm bít lỗ chân gây mụn, viêm, cản trở sự hấp thu các dưỡng chất từ bên ngoài, làm ảnh hưởng xấu đến da. Hai yếu tố tác động đồng thời lên da sẽ đẩy nhanh quá trình lão hóa da, khiến cho da bị khô, mau chóng xuất hiện nếp nhăn nếu không được chăm sóc tốt.

</p>
<p>Trường hợp của bạn có thể sử dụng các loại kem chống lão hóa da, tốt hơn nếu có bổ sung thêm thành phần dưỡng ẩm để giúp cân bằng độ ẩm cho da, cải thiện tình trạng da khô, thiếu nước, làm chậm quá trình lão hóa da. Tuy nhiên, cần lưu ý lựa chọn các sản phẩm chứa thành phần thiên nhiên và được sản xuất bởi những thương hiệu mỹ phẩm uy tín. Đồng thời, nên mua ở những trung tâm thương mại lớn, những cửa hàng mỹ phẩm đáng tin cậy để tránh mua phải hàng nhái, hàng kém chất lượng, vừa tốn tiền lại gây hại da, đẩy mạnh quá trình lão hóa da.

</p>
<p>Bên cạnh việc dưỡng da bên ngoài nhờ các loại mỹ phẩm, ở tuổi này bạn cũng nên chủ động chăm sóc và nuôi dưỡng da khỏe mạnh từ sâu bên trong nhờ các sản phẩm được tinh chiết hoàn toàn từ thiên nhiên có tác dụng bảo vệ và tái tạo cấu trúc nền của da – yếu tố quyết định sự khỏe mạnh, căng sáng và mềm mịn của da. Khi cấu trúc nền của da khỏe mạnh, các thành phần  là elastin, laminin, collagen, fibronectin và proteoglycans sẽ luôn được duy trì tốt, giúp da căng sáng, mềm mịn và tươi trẻ theo thời gian.

</p>
<p>Ngoài ra, bạn cũng cần hạn chế thức khuya; quan tâm đến chế độ dinh dưỡng cân bằng, đủ chất; thường xuyên vận động để kích thích khả năng tuần hoàn máu, trao đổi chất trong cơ thể… là những điều hết sức cần thiết cho sức khỏe và sắc đẹp của phụ nữ.

</p>
	<p><a href="#" title="">
      Chào chuyên gia, Tôi năm nay 28 tuổi, 2 tháng trước tôi thường thức khuya để làm việc, cũng từ đó tôi có thói quen ăn đêm. Hiện tại tôi đã bị tăng cần và mặc dù đã tranh thủ đi ngủ sớm nhưng hầu như đêm nào tôi cũng trằn trọc đến 2, 3 giờ sáng mới ngủ được. Tôi xin hỏi có cách nào để tôi có thể ngủ sớm trở lại và không bị mất ngủ nữa được không ạ?    </a>
      </p>
      <p><a href="" title="">
      Tôi năm nay 57 tuổi, trong quá trình "giao ban" nhiều khi tự nhiên bị "xìu" hẳn xuống và không cương trở lại được mặc dù chưa xuất tinh. Tôi có bị bệnh gì không, Sâm Alipas Platinum có giúp gì được cho tôi không?    </a>
      </p>
      <p><a href="">
      Chào chuyên gia, tôi và chồng bị viễn thị, con tôi bị cận thị 6 độ. Tôi thấy trên thị trường hiện nay quảng cáo nhiều loại thuốc bổ mắt có tác dụng giúp sáng mắt, hỗ trợ cải thiện thị lực nhưng không biết là có thể giúp viễn thị và cận thị giảm độ và nhìn rõ hơn không? Xin chuyên gia tư vấn cách chọn thuốc. (Thanh Trúc - Bình Thạnh)    </a></p><p><a href="">
      Tôi làm việc văn phòng và tiếp xúc với máy vi tính hơn 8 tiếng 1 ngày. Tôi thường đau gáy, vai, cổ, đôi khi buốt xuống cánh tay. Vậy, tôi dùng JEX MAX phòng ngừa thoái hóa cột sống được không?    </a></p>
					</div>
					
				</div>
			</div>
		</main>

	</div>
@endsection
