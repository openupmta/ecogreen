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
				<a class="title-1" href="{{route('gioithieu')}}">Giới Thiệu</a>
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

			@foreach($data as $row)
			<div class="col-md-9 km-right">
				<div>{!!$row->content!!}</div>
			</div>
			@endforeach
		</div>
	</main>

</div>
@endsection

