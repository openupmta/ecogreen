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
					
						@include('sidebar')

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