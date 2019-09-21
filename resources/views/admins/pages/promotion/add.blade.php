@extends('admins.layouts.master')
@section('khuyenmai','active')
@section('title')
    Thêm khuyến mại
@endsection
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Thêm khuyến mại
            </h1>
            <ol class="breadcrumb">
                <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Thêm</li>
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
                        <form role="form" method="POST" action=""
                              enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputFile">Hình ảnh </label>
                                    <input type="file" id="image" name="image" onchange="showIMG()">
                                </div>
                                 
                                <div class="form-group">
                                    <label for="" style="margin-left: 10px">Ảnh hiển thị : </label>
                                    <div id="viewImg">
                                        
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                        <label for="exampleInputEmail1">Tiêu đề (*)</label>
                                        <input type="text" class="form-control" placeholder="Tiêu đề khuyến mại" name="title"
                                               value="{{ old('title') }}">
                                    </div>

                                <div class="form-group">
                                        <label for="exampleInputEmail1">Nôi dung (*)</label>
                                        <input type="text" class="form-control" placeholder="Nội dung khuyến mại" name="content"
                                               value="{{ old('content') }}">
                                    </div>
                                
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Link (*)</label>
                                    <input type="text" class="form-control" placeholder="Link trang khuyến mại" name="link"
                                           value="{{ old('link') }}">
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hotline (*)</label>
                                    <input type="text" class="form-control" placeholder="Số điện thoại hotline" name="hotline"
                                           value="{{ old('hotline') }}">
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
                        document.getElementById('viewImg').innerHTML = '<img style="width:600px; height: 250px;" src="' + e.target.result + '"/>';
                    };
                    reader.readAsDataURL(fileInput.files[0]);
                }
            }
        }

    </script>

@endsection

