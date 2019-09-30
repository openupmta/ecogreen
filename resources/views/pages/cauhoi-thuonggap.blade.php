@extends('master-layout')
@section('title')
Câu hỏi thường gặp
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
                <a class="title-1" href="">Câu hỏi thường gặp</a>
            </li>
        </ul>
        <div class="space"></div>
    </div>
    <main>
        <div class="row">


            @include('sidebar')


            <div class="col-md-9 km-right">


                <div class="row">

                    @foreach ($catequestion as $key => $item)
                        <div class="col-md-6 km-ct">
                            @foreach ($item->advisorys as $key => $value)
                                @if($key==0)
                                    <a href="detail/{{ $value->slug }}.html"><img class="person-sk" src="images/{{ $value->image }}" alt=""></a>
                                @endif
                            @endforeach
                                    <a class="ab-img" href="{{ $item->slug }}.html">{{ $item->title }}</a>
                            @foreach ($item->advisorys as $key => $row)
                                @if($key==0)
                                    <a class="title-sk" href="detail/{{ $row->slug }}.html"> {{ $row->title }}</a>
                                    @else
                                    <a class="text-sk" href="detail/{{ $row->slug }}.html">{{ $row->title }}</a>
                                @endif
                            @endforeach
                        </div>
                    @endforeach

                </div>

            </div>

        </div>
</div>
</main>
</div>
@endsection
