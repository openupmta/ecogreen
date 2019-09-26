@extends('master-layout')
@section('title')
Giới thiệu
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
				<a class="title-1" href="{{route('gioi-thieu')}}">Chi Tiết</a>
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
			<div class="col-md-9 text-ct-2">
				<h2>Bí quyết chăm sóc sức khỏe và làm đẹp da tuổi tiền mãn kinh, mãn kinh</h2>
				<p>Tuổi tiền mãn kinh, mãn kinh là giai đoạn sinh lý bình thường của cơ thể nhưng đây lại là thời kỳ tiềm ẩn nhiều đợt "sóng ngầm", có sức công phá mạnh mẽ khiến hầu hết phụ nữ đều phải trải qua những thay đổi lớn về sức khỏe, sắc đẹp, đặc biệt là sự xuống cấp của làn da. Vì thế, việc tìm bí quyết chăm sóc sức khỏe và làm đẹp cho da tuổi tiền mãn kinh, mãn kinh là vấn đề luôn được phụ nữ quan tâm.</p>
				<b>Tuổi tiền mãn kinh, mãn kinh ảnh hưởng đến sức khỏe và làn da như thế nào?</b>
				<p>Bước vào thời kỳ tiền mãn kinh, mãn kinh, hệ trục “vàng” Não bộ - Tuyến yên – Buồng trứng suy giảm hoạt động khiến bộ 3 nội tiết tố: estrogen, progesterone và testosterone trồi sụt bất thường. Lúc này, phụ nữ phải đối mặt với hàng loạt vấn đề về thể chất và tâm thần kinh: kinh nguyệt không đều, bốc hỏa, đổ mồ hôi đêm, rối loạn giấc ngủ, giảm khả năng sinh sản, khô teo âm đạo, giảm ham muốn tình dục, giảm trí nhớ, kém tập trung, tâm trạng thất thường, trầm cảm, căng thẳng và các bệnh lý khác như loãng xương, bệnh lý tim mạch,…</p>
				<img src="images/ct-2.jpg" alt="">
				<b>Tuổi tiền mãn kinh, mãn kinh ảnh hưởng đến sức khỏe và làn da như thế nào?</b>	
				<p>Tuổi tiền mãn kinh, mãn kinh là giai đoạn sinh lý bình thường của cơ thể nhưng đây lại là thời kỳ tiềm ẩn nhiều đợt "sóng ngầm", có sức công phá mạnh mẽ khiến hầu hết phụ nữ đều phải trải qua những thay đổi lớn về sức khỏe, sắc đẹp, đặc biệt là sự xuống cấp của làn da. Vì thế, việc tìm bí quyết chăm sóc sức khỏe và làm đẹp cho da tuổi tiền mãn kinh, mãn kinh là vấn đề luôn được phụ nữ quan tâm.</p>
				<b>Tuổi tiền mãn kinh, mãn kinh ảnh hưởng đến sức khỏe và làn da như thế nào?</b>
				<p>Bước vào thời kỳ tiền mãn kinh, mãn kinh, hệ trục “vàng” Não bộ - Tuyến yên – Buồng trứng suy giảm hoạt động khiến bộ 3 nội tiết tố: estrogen, progesterone và testosterone trồi sụt bất thường. Lúc này, phụ nữ phải đối mặt với hàng loạt vấn đề về thể chất và tâm thần kinh: kinh nguyệt không đều, bốc hỏa, đổ mồ hôi đêm, rối loạn giấc ngủ, giảm khả năng sinh sản, khô teo âm đạo, giảm ham muốn tình dục, giảm trí nhớ, kém tập trung, tâm trạng thất thường, trầm cảm, căng thẳng và các bệnh lý khác như loãng xương, bệnh lý tim mạch,…</p>
					<img src="images/ct-3.png" alt="">
			</div>
		</div>
	</main>
</div>
@endsection