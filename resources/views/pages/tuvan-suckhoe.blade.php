@extends('master-layout')

@section('title')
Tư vấn sức khỏe
@endsection



@section('css')
<link rel="stylesheet" href="{{ asset('css/khuyenmai.css')}}">
@endsection
@section('content')
<div class="container">
    @if(session('thongbao'))
    <script>
        alert('{{session('thongbao')}}')

    </script>
    @endif
    @if(count($errors) > 0)
    @foreach($errors->all() as $err)
    <script>
        alert('{{ $err }}')

    </script>
    @endforeach
    @endif






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

            
                @include('sidebar')


            <div class="col-md-9 km-right">
                <b style="color: blue">Gửi câu hỏi của bạn
                </b>
                <p></p>
                <form method="POST">
                    @csrf
                    <input type="text" name="name" placeholder="Nhập Họ Và Tên" value="{{ old('name') }}">

                    <input type="text" name="email" placeholder="Nhập Mail" value="{{ old('email') }}" ><br>
                    <p><br><textarea name="question" style="width: 100%;
							    max-width: 650px;
							    height: 200px;
							    background: #fff;
							    margin-bottom: 10px;
							    border: 1px solid #ccc;">{{ old('question')}}</textarea></p>

                    <input class="btn-danger btn" type="submit" placeholder="Gửi" name="">
                </form>
                <p></p>
                {{-- <b style="color: blue">Gửi câu hỏi của bạn</b> --}}
                <P>
                    @foreach ($advisory as $key => $item)

                    {{-- <div style="display: inline;"><a href="#" title=""> --}}
                            {{ $item->question }}</a>
                        {{-- <span id="dots{{ $key }}">...</span>
                        <div id="more{{ $key }}" style="display:none;"> --}}
                            {{ $item->status }}
                            {{-- @foreach ($answer as $row)
                            @if ($item->id == $row->advisory_id)
                            {{ $row->answer }}
                            @endif
                            @endforeach --}}

{{-- 
                        </div>
                    </div>
                </p>
                <button style="display: inline;" onclick="myFunctionReadMore()" id="myBtn">Đọc tiếp</button> --}}


                <p><a href="#" title=""></a></p>
                @endforeach

                <script>
                    function myFunctionReadMore() {
                        var dots = document.getElementById("dots");
                        var moreText = document.getElementById("more");
                        var btnText = document.getElementById("myBtn");

                        if (dots.style.display === "none") {
                            dots.style.display = "inline";
                            btnText.innerHTML = "Đọc tiếp";
                            moreText.style.display = "none";
                        } else {
                            dots.style.display = "none";
                            btnText.innerHTML = "Rút gọn";
                            moreText.style.display = "inline";
                        }
                    }

                </script>
                
            </div>

        </div>
</div>
</main>

</div>




@endsection
