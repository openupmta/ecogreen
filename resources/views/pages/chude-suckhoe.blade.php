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

			 
				@include('sidebar')


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