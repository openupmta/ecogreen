@extends('admins.layouts.master')
@section('tuvan','active')
@section('title')
    Thêm chủ đề câu hỏi
@endsection
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                    Thêm chủ đề câu hỏi
            </h1>
            <ol class="breadcrumb">
                <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Thêm chủ đề câu hỏi</li>
            </ol>
        </section>
        <br>
        <div>
            {{--  @if ($errors->('name'))
                <div class="alert alert-danger" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </div>
            @endif  --}}
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
                        <form role="form" method="POST"
                              enctype="multipart/form-data">
                            @csrf

                            
                            <div class="box-body">


                                 <div class="form-group">
                                        <label for="exampleInputEmail1">Chủ đề câu hỏi (*)</label>
                                        <input type="text" class="form-control"  name="title"
                                            >
                                    </div>

                                {{-- <div class="form-group">
                                    <label for="exampleInputFile">Hình ảnh </label>
                                    <input type="file" id="image" name="image" onchange="showIMG()">
                                </div>
                                 
                                <div class="form-group">
                                    <label for="" style="margin-left: 10px">Ảnh hiển thị : </label>
                                    <div id="viewImg">
                                        <img src="" width="100$" >
                                    </div>
                                </div> --}}
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
                        document.getElementById('viewImg').innerHTML = '<img style="width:600px; height: 250px;" src="' + e.target.result + '"/>';
                    };
                    reader.readAsDataURL(fileInput.files[0]);
                }
            }
        }

    </script>

@endsection

