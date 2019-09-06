@extends('master-layout')
@section('title')
Chủ đề sức khỏe
@endsection



@section('css')
<link rel="stylesheet" href="{{asset('css/chude-sk.css')}}">
@endsection
@section('content')
@section('content')
<div class="container">
		<div class="tc-km">
		<ul class="tool-menu">
			<li class="list-menu">
				<a class="title-1" href="">Trang Chủ</a>&nbsp;
			</li>
			<li class="list-menu"><i class="fas fa-chevron-right" style="font-size: 12px"></i></li>&nbsp;
			<li class="list-menu">
				<a class="title-1" href="">Tin Tức</a>
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
				<div class="row">
					<div class="col-md-6 km-ct">
						<img class="person-sk" src="images/person_2.jpg" alt="">
						<a class="ab-img" href="">sức khỏe sinh lý nữ</a>
						<a class="title-sk" href=""> Làm thế nào để chọn đúng sản phẩm tăng hormone nữ an toàn?</a>
						<a class="text-sk" href="">
						Cảnh báo nguy cơ thoái hóa đốt sống cổ khi dùng smartphone 2h/ngày               
						</a>
						<a class="text-sk" href="">
						Cảnh báo nguy cơ thoái hóa đốt sống cổ khi dùng smartphone 2h/ngày               
						</a>
						<a class="text-sk" href="">
						Cảnh báo nguy cơ thoái hóa đốt sống cổ khi dùng smartphone 2h/ngày               
						</a>
					</div>
					<div class="col-md-6 km-ct">
						<img class="person-sk" src="images/person_3.jpg" alt="">
						<a class="ab-img" href="">sức khỏe sinh lý nữ</a>
						<a class="title-sk" href=""> Làm thế nào để chọn đúng sản phẩm tăng hormone nữ an toàn?</a>
						<a class="text-sk" href="">
						Cảnh báo nguy cơ thoái hóa đốt sống cổ khi dùng smartphone 2h/ngày               
						</a>
						<a class="text-sk" href="">
						Cảnh báo nguy cơ thoái hóa đốt sống cổ khi dùng smartphone 2h/ngày               
						</a>
						<a class="text-sk" href="">
						Cảnh báo nguy cơ thoái hóa đốt sống cổ khi dùng smartphone 2h/ngày               
						</a>
					</div>
					<div class="col-md-6 km-ct">
						<img class="person-sk" src="images/person_3.jpg" alt="">
						<a class="ab-img" href="">sức khỏe sinh lý nữ</a>
						<a class="title-sk" href=""> Làm thế nào để chọn đúng sản phẩm tăng hormone nữ an toàn?</a>
						<a class="text-sk" href="">
						Cảnh báo nguy cơ thoái hóa đốt sống cổ khi dùng smartphone 2h/ngày               
						</a>
						<a class="text-sk" href="">
						Cảnh báo nguy cơ thoái hóa đốt sống cổ khi dùng smartphone 2h/ngày               
						</a>
						<a class="text-sk" href="">
						Cảnh báo nguy cơ thoái hóa đốt sống cổ khi dùng smartphone 2h/ngày               
						</a>
					</div>
					<div class="col-md-6 km-ct">
						<img class="person-sk" src="images/person_2.jpg" alt="">
						<a class="ab-img" href="">sức khỏe sinh lý nữ</a>
						<a class="title-sk" href=""> Làm thế nào để chọn đúng sản phẩm tăng hormone nữ an toàn?</a>
						<a class="text-sk" href="">
						Cảnh báo nguy cơ thoái hóa đốt sống cổ khi dùng smartphone 2h/ngày               
						</a>
						<a class="text-sk" href="">
						Cảnh báo nguy cơ thoái hóa đốt sống cổ khi dùng smartphone 2h/ngày               
						</a>
						<a class="text-sk" href="">
						Cảnh báo nguy cơ thoái hóa đốt sống cổ khi dùng smartphone 2h/ngày               
						</a>
					</div>
				</div>
			</div>

		</div>
	</div>
</main>
</div>
@endsection