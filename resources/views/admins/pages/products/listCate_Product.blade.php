@extends('admins.layouts.master')
@section('form','active')
@section('title')
    Danh sách web
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
                <h1>
                    Danh sách thể loại sản phẩm
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">web</li>
                </ol>
            </section>
            <section class="content">
                <div class="row">       
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <a href="{{route('addcateproducts')}}" class="btn btn-success">Thêm</a>
                            </div>
                            <div class="box-header">

                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên thể loại<i></i></th>
                                       
                                        <th class="col-md-3">Hành động</th>
                                        
                                        <th class="col-md-3">Thao tác</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($cate_products as $key => $value)
                                        
                                        <tr class="odd gradeX" align="center">
                                            
                                            <td>{{$key+1}}</td>
                                            <td>{{$value->name}}</td>
                                            
                                            <td>
                                                @if($value->status==1)
                                                     Hiển thị
                                                    
                                                @else
                                                    Không Hiển Thị
                                                    
                                                @endif
                                            </td>

                                            
                                            <td>
                                                
                                                <div id="button{{$value->id}}">
                                                    <a class="btn btn-primary" 
                                                       href="{{route('editcateproducts',['id'=>$value->id])}}"
                                                       onclick="return confirm('Bạn có chắc chắn muốn sửa không!')">Sửa</a>
                                                    @if($value->status==1)
                                                        <a class="btn btn-info"
                                                           href="{{route('danhsachcateproducts')}}"
                                                           onclick="return confirm('Hành động sẽ ẩn Sản Phẩm này! bạn có muốn tiếp tục?')">Ẩn</a>
                                                           
                                                    @else
                                                        <a class="btn btn-warning"
                                                           href="{{route('danhsachcateproducts')}}"
                                                           onclick="return confirm('Hành động sẽ hiển thị Sản Phẩm mục này! bạn có muốn tiếp tục?')">Hiển
                                                            thị</a>
                                                            

                                                    @endif
                                                    <a class="btn btn-danger"
                                                       href="{{route('deletecateproducts',['id'=>$value->id])}}"
                                                       onclick="return confirm('Hành động sẽ xóa web này! bạn có muốn tiếp tục?')">Xóa</a>
                                                </div>


                                        </tr>
                                    
                                    @endforeach
                                        </tbody>


                                    </table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->`
            </section>
            <script>
                function thaotac(id) {
                document.getElementById("button"+id).style.display = 'block';
                document.getElementById("bt"+id).style.display = 'none';
                }

                function update(id) {
                    var input = document.querySelector('#name' + id);
                    var edit = document.querySelector('#edit' + id);
                    var active = document.querySelector('#active' + id);


                    input.removeAttribute('readonly');
                    input.classList.remove('input');
                    input.classList.add('form-control');
                    edit.classList.add('hide');
                    active.classList.remove('hide');
                }

                function huyupdate(id) {
                    var r = confirm("WARNING! You have unsaved changes that may be lost!");
                    if (r == true) {
                        var input = document.querySelector('#name' + id);
                        var edit = document.querySelector('#edit' + id);
                        var active = document.querySelector('#active' + id);


                        input.classList.add('input');
                        $('.input').prop('readonly', true);
                        input.classList.remove('form-control');
                        edit.classList.remove('hide');
                        active.classList.add('hide');

                    } else {
                        return false;
                    }
                }
            </script>
        </div>
    </div>


@endsection