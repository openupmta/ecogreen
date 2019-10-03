@extends('admins.layouts.master')
@section('tuvan','active')
@section('title')
Sửa câu trả lời
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">

        <style>
            .input {
                background: none;
                border: none;
            }

        </style>


        <section class="content-header">
            {{-- <h1>
                    Câu hỏi
            </h1> --}}
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Sửa câu trả lời</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12 km-right">
                    </b>

                    @if(session('thongbao1'))

                    <script>
                    alert('{{session('thongbao1')}}')
                    </script>
                    
                    @endif

                    <p><br>
                        <label>Câu hỏi :</label>
                        {{ $advisory->question }}
                        {{--  <textarea class="form-control"  name="" style="width: 100%;
                                            height: 200px;
                                            background: #fff;
                                            margin-bottom: 10px;
                                            border: 1px solid #ccc;">{{ $advisory->question }}</textarea> --}}
                    </p>
                    <form method="POST" enctype="multipart/form-data">
                        @csrf

                        <p> <label>Chủ đề câu hỏi :</label>

                            <select class="form-control" name="parent" id="">
                                <option value="{{ $advisory->advisory_id }}">{{ $advisory->cate->title }}</option>
                                @foreach ($catequestions as $item)
                                <option value="{{ $item->id }}">
                                    {{ $item->title }}
                                </option>
                                @endforeach

                            </select>
                        </p>


                        <div class="form-group">
                                <label for="exampleInputEmail1">Tiêu đề</label>
                                <input type="text" class="form-control" name="title" value="{{ $advisory->title }}">
                            </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Hình ảnh </label>
                            <input type="file" id="image" name="image" onchange="showIMG()">
                        </div>

                        <div class="form-group">
                            <label for="" style="margin-left: 10px">Ảnh hiển thị : </label>
                            <div id="viewImg">
                                <img src="images/{{ $advisory->image }}" width="100$">
                            </div>
                        </div>


                        <label>Câu trả lời :</label>
                        <p><br>
                            <input type="hidden" name="id" value="{{ $advisory->id }}">
                            <textarea class="form-control" name="name" style="width: 100%;
                                    height: 300px;
                                    background: #fff;
                                    margin-bottom: 10px;
                                    border: 1px solid #ccc;">{{ $advisory->answer }}</textarea></p>
                        <button style="align:right" type="submit" class="btn-danger btn">Sửa</button>

                    </form>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->`
        </section>
        <script>
            function showIMG() {
                var fileInput = document.getElementById('image');
                var filePath = fileInput.value; //lấy giá trị input theo id
                var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i; //các tập tin cho phép
                //Kiểm tra định dạng
                if (!allowedExtensions.exec(filePath)) {
                    alert('Bạn chỉ có thể dùng ảnh dưới định dạng .jpeg/.jpg/.png/.gif extension.');
                    fileInput.value = '';
                    return false;
                } else {
                    //Image preview
                    if (fileInput.files && fileInput.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            document.getElementById('viewImg').innerHTML =
                                '<img style="width:600px; height: 250px;" src="' + e.target.result + '"/>';
                        };
                        reader.readAsDataURL(fileInput.files[0]);
                    }
                }
            }

        </script>
    </div>
</div>


@endsection
