@extends('admins.layouts.master')
@section('form','active')
@section('title')
    Thêm
@endsection
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Thêm
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
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
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            {{-- Mục lục --}}
                            <h3 class="box-title">Danh mục</h3>

                            <div class="box-tools">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>

                        <div class="box-body no-padding">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href=""><i class="fa fa-inbox"></i> Thêm thể loại
                                        Thêm
                                        <span class="label label-primary pull-right">1</span></a>
                                </li>
                                <li><a href=""><i class="fa fa-envelope-o"></i> Thêm Thêm
                                        <span class="label label-primary pull-right">1</span></a></li>
                                </a>
                                </li>
                                <li><a href=""><i class="fa fa-file-text-o"></i> Danh
                                        sách</a></li>

                            </ul>
                        </div>

                        <!-- /.box-body -->
                    </div>
                    <!-- /. box -->
                    {{-- End mục luc --}}

                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="box box-primary">
                        <h3 style="text-align: left; padding-left: 5px">Thêm thể loại</h3>
                        <form role="form" method="POST" action="{{route('editcateproducts',['id'=>$cate_products->id])}}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên thể loại (*)</label>
                                    <input type="text" class="form-control" placeholder="Tên thể loại" name="name" value="{{$cate_products->name}}">
                                </div>
                    
                                <div class="form-group">
                                    <label class="radio-inline">
                                        <input name="active" value="1" type="radio"
                                        @if($cate_products->status==1)
                                            checked
                                        @endif
                                        >Có
                                    </label>
                                    <label class="radio-inline">
                                        <input name="active" value="0" type="radio"
                                        @if($cate_products->status==0)
                                        checked
                                    @endif
                                        >Không
                                    </label>
                                </div>

                                {{--Hết tiêu điểm--}}
                                
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
                        document.getElementById('viewImg').innerHTML = '<img style="width:100px; height: 100px;" src="' + e.target.result + '"/>';
                    };
                    reader.readAsDataURL(fileInput.files[0]);
                }
            }
        }

    </script>

@endsection

