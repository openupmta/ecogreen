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
                <script>
                    function readMoretuvan(id) {
                        var show = document.getElementById('more'+id);
                        var button_show = document.getElementById('myBtn_'+id);
                        if(show.style.height == '0px'){
                            show.style.height = 'auto';
                            button_show.innerHTML = 'Rút gọn';
                        }else{
                            show.style.height = '0px';
                            button_show.innerHTML = 'Xem thêm';
                        }
                        
                    }
                </script>
                <P>
                        
                    @foreach ($advisory as $key => $item)

                    <div style="display: inline;"><a href="#" title="">
                            {{ $item->question }}</a>
                        <span id="dots{{ $item->id }}">...</span>
                        <div id="more{{ $item->id }}" style="height:0px;transition: 2s all;overflow: hidden" class="more_content_a">
                            {{ $item->answer }}
                        </div>
                        <button style="display: inline;" onclick="readMoretuvan({{ $item->id }})" id="myBtn_{{ $item->id }}">Xem thêm</button>
                    </div>
                </p>
                <p><a href="#" title=""></a></p>
                @endforeach
                {{ $advisory->links() }}
                
            </div>

        </div>
</div>
</main>

</div>




@endsection
