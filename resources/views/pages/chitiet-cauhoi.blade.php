@extends('master-layout')
@section('title')
{{ $detail->title }}
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

            <div class="col-md-9">
               
                <h3 class="title-sk-ct">{{ $detail->title }}</h3>
                <div class="row">

{{-- 
                    @foreach ($detail->advisorys as $item)
                  
                    <div class="col-md-4 img-sk-ct">
                        <a href="detail/{{ $item->slug }}.html">
                           <img src="images/{{ $item->image }}" alt="">
                        </a>
                    </div>
                    <div class="col-md-8 text-ct-sp">
                             <a href="detail/{{ $item->slug }}.html"> <h2>{{ $item->title }} </h2></a>
                              <p></p>
                              <p> {{ $item->question }}</p>
                        <a href="detail/{{ $item->slug }}.html">Xem Tiếp <i class="fas fa-angle-double-right"></i></a>
                    </div>
                    @endforeach --}}

                    @foreach ($detail->advisorys as $item)
                        
                   
                     <div class="col-md-4 img-sk-ct mb-5">
                         <a href="detail/{{ $item->slug }}.html">
                        <img src="images/{{ $item->image }}" alt="" class="img_tuvansuckhoe">
                    </a>
					</div>
					<div class="col-md-8 text-ct-sp mb-5">
                        <h2><a href="detail/{{ $item->slug }}.html" style="float:none">{{ $item->title }}</a></h2>
                        <p> {{ $item->question }}</p>
						<a href="detail/{{ $item->slug }}.html">Xem Tiếp <i class="fas fa-angle-double-right"></i></a>
                    </div>
                    @endforeach

					{{-- <div class="col-md-4 img-sk-ct">
						<img src="images/chite-tiet-sp.jpg" alt="">
					</div>
					<div class="col-md-8 text-ct-sp">
						<h2>Làm thế nào để chọn đúng sản phẩm tăng hormone nữ an toàn?</h2>
						<p>Sức khỏe, đời sống chăn gối, nhan sắc rủ nhau xuống dốc khi bạn bắt đầu đặt chân sang cột mốc tuổi 35 - độ tuổi mà các hormone trong cơ thể người phụ nữ  thiếu hụt và xáo trộn. Cách cải thiện tình trạng này chính là  làm thế nào để tăng nồng độ hormone nữ, nhưng không phải ai cũng tìm được phương pháp thực sự hiệu quả và an toàn.</p>
						<a href="">Xem Tiếp <i class="fas fa-angle-double-right"></i></a>
					</div>
					<div class="col-md-4 img-sk-ct">
						<img src="images/chite-tiet-sp.jpg" alt="">
					</div>
					<div class="col-md-8 text-ct-sp">
						<h2>Làm thế nào để chọn đúng sản phẩm tăng hormone nữ an toàn?</h2>
						<p>Sức khỏe, đời sống chăn gối, nhan sắc rủ nhau xuống dốc khi bạn bắt đầu đặt chân sang cột mốc tuổi 35 - độ tuổi mà các hormone trong cơ thể người phụ nữ  thiếu hụt và xáo trộn. Cách cải thiện tình trạng này chính là  làm thế nào để tăng nồng độ hormone nữ, nhưng không phải ai cũng tìm được phương pháp thực sự hiệu quả và an toàn.</p>
						<a href="">Xem Tiếp <i class="fas fa-angle-double-right"></i></a>
					</div> --}}
				</div>

                </div>
            </div>
    </main>
</div>
@endsection
