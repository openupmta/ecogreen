@extends('admins.layouts.master')
@section('tuvan','active')
@section('title')
Sửa câu hỏi
@endsection
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Sửa câu hỏi
        </h1>
        <ol class="breadcrumb">
            <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Sửa câu hỏi</li>
        </ol>
    </section>
    <br>
    <div>
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
            {{$err}}<br>
            @endforeach

        </div>

        @endif
        @if(session('thongbao'))
        <div class="alert alert-success">
            {{session('thongbao')}}
        </div>
        @endif
        @if(session('thongbao1'))
        <div class="alert alert-danger">
            {{session('thongbao1')}}
        </div>
        @endif
    </div>


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-3">

                <!-- /. box -->
                {{-- End mục luc --}}

            </div>
            <!-- /.col -->
            <div class="col-md-12">
                <div class="box box-primary">
                    {{-- <h3 style="text-align: left; padding-left: 5px" >Sửa</h3> --}}
                    <form role="form" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="box-body">
                            <div class="form-group">
                                <label for="">Chủ đề câu hỏi (*)</label>
                                <select class="form-control" name="parent" id="">
                                    <option value="0">----ROOT----</option>
                                    @foreach ($catequestions as $item)
                                    <option value="{{ $item->id }}">
                                        {{ $item->title }}<br>
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Câu hỏi (*)</label>
                                <input type="text" class="form-control" name="title" value="{{ $question->title }}">
                            </div>
                            {{--  <input type="hidden" value="{{ $question->cate_id }}" name="id">  --}}

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Sửa</button>
                            </div>

                        </div>

                    </form>
                </div>
                <!-- /. box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

</div>
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

@endsection
