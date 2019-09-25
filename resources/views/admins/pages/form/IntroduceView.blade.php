@extends('admins.layouts.master')
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
                    Danh sách giới thiệu
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">introduce</li>
                </ol>
            </section>
            <section class="content">
                @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
                @endif
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <a href="{{ url('admin/introduce/add')}}" class="btn btn-success">Thêm</a>
                            </div>
                            <div class="box-header">

                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Content</th>
                                        <th>Trạng thái</th>
                                        <th>ngay cap nhat</th>
                                        <th class="col-md-3">Hành động</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                   @foreach($data as $row)
                                       <tr class="odd gradeX" align="center">
                                            <td style="width: 600px;">{!!$row->content!!}</td>
                                            <td>{{$row->status}}</td>
                                            <td><?php $date=date_create($row->created_at);echo date_format($date,"Y/m/d");?></td>
                                           <td>
                                                <!-- <a class="btn btn-primary" id="bt{{$row->id}}" style="display: block" onclick="thaotac({{$row->id}})" >Thao tác</a> -->
                                               <div id="button{{$row->id}}">
                                                    <a class="btn btn-primary w-25" id="edit" href="{{ url('admin/introduce/edit/'.$row->id) }}" onclick="">Sửa</a>
                                                    @if($row->status==1)
                                                        <a class="btn btn-info" style="width: 30%;" 
                                                           href="{{ url('admin/introduce/anhien/'.$row->id) }}" onclick="return confirm('Hành động sẽ ẩn Sản Phẩm này! bạn có muốn tiếp tục?')">Ẩn</a>
                                                    @else
                                                        <a class="btn btn-warning"
                                                           href="{{ url('admin/introduce/anhien/'.$row->id) }}" onclick="return confirm('Hành động sẽ hiển thị Sản Phẩm mục này! bạn có muốn tiếp tục?')">Hiển
                                                                thị</a>

                                                    @endif
                                                   <a class="btn btn-danger" href="{{ url('admin/introduce/delete/'.$row->id) }}"
                                                      onclick="return confirm('Hành động sẽ xóa web này! bạn có muốn tiếp tục?')">Xóa</a>
                                              </div>
                                            </td>


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
                function thaotac(id)
                document.getElementById("button"+id).style.display = 'block';
                document.getElementById("bt"+id).style.display = 'none';
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