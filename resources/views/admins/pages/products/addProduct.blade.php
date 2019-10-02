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
                                <li><a href="{{route('addcateproducts')}}"><i class="fa fa-inbox"></i> Thêm thể loại
                                        sản phẩm
                                        <span class="label label-primary pull-right">1</span></a>
                                </li>
                               
                                <li><a href="{{route('danhsachproducts')}}"><i class="fa fa-file-text-o"></i> Danh
                                        sách sản phẩm</a></li>

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
                        <h3 style="text-align: left; padding-left: 5px">Thêm sản phẩm</h3>
                        <form role="form" method="POST" action="{{route('addproducts')}}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Thể loại Thêm</label>
                                    <select class="form-control" name="cate_blogs">
                                   @foreach($cate_products as $value)
                                        <option value="{{$value->id}}"> {{$value->name}}</option>
                                   @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tiêu đề</label>
                                    <input type="text" class="form-control" placeholder="Tiêu đề" name="title" value="">
                                </div>
                                
                               
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nội dung (*)</label>
                                    <div class="form-group">
                                        <textarea name="content" rows="10" placeholder="Nhập nội dung"
                                                  class="form-control">{{ old('content') }}</textarea>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Chi tiết (*)</label>
                                    <div class="form-group">
                                        <textarea name="detail" rows="10" placeholder="Nhập nội dung"
                                                  class="form-control">{{ old('detail') }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Đinh lượng    (*)</label>
                                    <input type="text" class="form-control" placeholder="Đinh lượng" name="quantity" value="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Đơn giá   (*)</label>
                                    <input type="text" class="form-control" placeholder="Đơn giá" name="price" value="">
                                </div>
                                
                                <div class="form-group">
                                    <label>Hiển thị</label>
                                    <label class="radio-inline">
                                        <input name="active" value="1" type="radio">Có
                                    </label>
                                    <label class="radio-inline">
                                        <input name="active" value="0" type="radio">Không
                                    </label>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Ảnh sản phẩm</label>
                                        <input type="file" id="image" name="image" required="">
                                    </div>
                                </div>

                                {{--Hết tiêu điểm--}}
                                
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
                        document.getElementById('viewImg').innerHTML = '<img style="width:100px; height: 100px;" src="' + e.target.result + '"/>';
                    };
                    reader.readAsDataURL(fileInput.files[0]);
                }
            }
        }

    </script>

@endsection

