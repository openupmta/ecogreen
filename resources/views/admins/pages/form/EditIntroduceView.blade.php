@extends('admins.layouts.master')
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
               
                <!-- /.col -->
                <div class="col-md-12">
                    <div class="box box-primary">
                        <h3 style="text-align: left; padding-left: 5px">Thêm Giới Thiệu</h3>
                        <form role="form" method="post" action="{{route('editintroduce',['id'=>$data->id])}}">
                            @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Nội dung </label>
                                    <div class="form-group">
                                        <textarea name="content" rows="10" placeholder="Nhập nội dung"
                                                  class="form-control">
                                                      {{$data->content}}
                                                  </textarea>
                                    </div>
                                </div>
                               <div class="form-group">
                                    <label>status:</label><br>
                                    <label class="radio-inline">
                                        
                                        <input name="active" value="1" @if($data->status==1) checked="" @endif
                                           type="radio">Hiên
                                       
                                    </label>
                                    <label class="radio-inline">
                                      
                                        <input name="active" 
                                        value="0" type="radio" @if($data->status==0) checked="" @endif>ẩn
                                       
                                    </label>
                                </div>
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

