@extends('master-layout')
@section('title')
Khuyến mãi
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/khuyenmai.css')}}">
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
						<a class="title-1" href="khuyen-mai">Khuyến Mại</a>
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
								<form method="POST">
									@csrf
								<h2 class="title-dk">đăng ký thành viên</h2>
								<p class="text-dk">Để nhận được ưu đãi đặc biệtvà bản tin sức khỏe hữu ích</p>
								<input name="email" type="text" placeholder="Nhập địa chỉ Emai"><br>
										@if(session('thongbao'))
										<script>
											alert('{{session('thongbao')}}')
										</script>
										@endif
										@if($errors->has('email'))
								
										<script>
												alert('{{ $errors->first('email') }}')
											</script>
										@endif

								<button type="submit"  class="bt-dky" href="">đăng ký</button>
							</form>
							</div>
						</div>
						
					</div>
					<div class="col-md-9 km-right">
						@foreach ($promotion as $item)
							
						
						<img src="images/{{ $item->image }}" alt="">
						<h2 class="title-chao">{{ $item->title }}</h2>
						<p class="text-chao">{{ $item->content }}</p>
						<p class="xem-ct">Xem chi tiết chương trình tại <a class="link-ct" href="{{ $item->link }}">{{ $item->link }}</a></p>

						<div class="space-1"></div>
						<h3 class="hotline-ct">Hotline: {{ $item->hotline }}</h3>
						@endforeach
					</div>
					
				</div>
			</div>
		</main>
	</div>
	@endsection