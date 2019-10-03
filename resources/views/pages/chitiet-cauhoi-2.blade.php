@extends('master-layout')
@section('title')
{{ $detail->cate->title }}
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
			
			@include('sidebar')
			<div class="col-md-9 text-ct-2">
				<h2>{{ $detail->title }}</h2>
				<b>{{ $detail->question }}</b>
				<p></p>
				<p style="text-decoration:underline"> Trả Lời :</p>
				<p>{!! $detail->answer !!}</p>
				<img style="display: block; margin-left: auto; margin-right: auto; height:auto ;width:auto;" src="images/{{ $detail->image }}" alt="">
				{{-- Để được tư vấn về sức khoẻ vui lòng liên hệ :(028 --}}
				{{-- <img src="images/ct-2.jpg" alt="">
				<b>Tuổi tiền mãn kinh, mãn kinh ảnh hưởng đến sức khỏe và làn da như thế nào?</b>	
				<p>Tuổi tiền mãn kinh, mãn kinh là giai đoạn sinh lý bình thường của cơ thể nhưng đây lại là thời kỳ tiềm ẩn nhiều đợt "sóng ngầm", có sức công phá mạnh mẽ khiến hầu hết phụ nữ đều phải trải qua những thay đổi lớn về sức khỏe, sắc đẹp, đặc biệt là sự xuống cấp của làn da. Vì thế, việc tìm bí quyết chăm sóc sức khỏe và làm đẹp cho da tuổi tiền mãn kinh, mãn kinh là vấn đề luôn được phụ nữ quan tâm.</p>
				<b>Tuổi tiền mãn kinh, mãn kinh ảnh hưởng đến sức khỏe và làn da như thế nào?</b>
				<p>Bước vào thời kỳ tiền mãn kinh, mãn kinh, hệ trục “vàng” Não bộ - Tuyến yên – Buồng trứng suy giảm hoạt động khiến bộ 3 nội tiết tố: estrogen, progesterone và testosterone trồi sụt bất thường. Lúc này, phụ nữ phải đối mặt với hàng loạt vấn đề về thể chất và tâm thần kinh: kinh nguyệt không đều, bốc hỏa, đổ mồ hôi đêm, rối loạn giấc ngủ, giảm khả năng sinh sản, khô teo âm đạo, giảm ham muốn tình dục, giảm trí nhớ, kém tập trung, tâm trạng thất thường, trầm cảm, căng thẳng và các bệnh lý khác như loãng xương, bệnh lý tim mạch,…</p>
					<img src="images/ct-3.png" alt=""> --}}
			</div>
		</div>
	</main>
</div>
@endsection