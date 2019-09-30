@extends('admins.layouts.master')
@section('suckhoe','active')
@section('title')
Thêm chủ đề sức khoẻ
@endsection
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Thêm chủ đề sức khoẻ
        </h1>
        <ol class="breadcrumb">
            <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Thêm chủ đề sức khoẻ</li>
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
                    <form role="form" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div class="box-body">
                            <p> <label>Chủ đề sức khỏe :</label>

                                <select class="form-control" name="parent" id="">
                                    <option value="0">----ROOT----</option>
                                    @foreach ($cate as $item)
                                    <option value="{{ $item->id }}">
                                        {{ $item->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </p>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Tiêu đề</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <label>Tóm tắt :</label>
                            <p><br>
                                {{-- <input type="hidden" name="id" value="{{ $healths->id }}"> --}}
                                <textarea class="form-control" name="summary" style="width: 100%;
                                                height: 100px;
                                                background: #fff;
                                                margin-bottom: 10px;
                                                border: 1px solid #ccc;"></textarea></p>

                            <label>Nội dung :</label>
                            <p><br>
                                {{-- <input type="hidden" name="name" value="{{ $healths->id }}"> --}}
                                <textarea class="form-control" name="names" style="width: 100%;
                                                height: 300px;
                                                background: #fff;
                                                margin-bottom: 10px;
                                                border: 1px solid #ccc;"></textarea></p>


                            <div class="form-group">
                                <label for="exampleInputFile">Hình ảnh </label>
                                <input type="file" id="image" name="image" onchange="showIMG()">
                            </div>

                            <div class="form-group">
                                <label for="" style="margin-left: 10px">Ảnh hiển thị : </label>
                                <div id="viewImg">
                                    <img src="" width="100$">
                                </div>
                            </div>


                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Thêm</button>
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
