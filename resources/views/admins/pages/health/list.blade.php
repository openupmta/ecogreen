@extends('admins.layouts.master')
@section('suckhoe','active')
@section('title')
Danh sách chủ đề
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
                    Danh sách chủ đề
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Danh sách câu hỏi</li>
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
                            <a href="admin/headlths/add" class="btn btn-success">Thêm</a>
                        </div>
                        <div class="box-header">

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Chủ đề</th>
                                        <th>Tiêu đề</th>
                                        <th>Tóm tắt</th>
                                        <th>Nội dung</th>
                                        <th>Ảnh</th>
                                        <th>Hành động</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($healths as $item)
                                    <tr>
                                
                                    <td>{{$item->catehealths->name}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{!!$item->summary!!}</td>
                                    <td>{!!$item->content!!}</td>
                                    <td><img width="100px" src="images/{{ $item->image }}"></td>
                                    
                                    <td>
                                        <a class="btn btn-info" href="{{ url('admin/headlths/edit/'.$item->id) }}">Sửa</a>
                                        <a class="btn btn-danger" href="{{ url('admin/headlths/delete/'.$item->id) }}"
                                            onclick="return confirm('Hành động sẽ xóa câu hỏi này! bạn có muốn tiếp tục?')">Xóa</a>
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
            {
                {
                    -- function thaotac(id) {
                        --
                    }
                } {
                    {
                        --document.getElementById("button" + id).style.display = 'block';
                        --
                    }
                } {
                    {
                        --document.getElementById("bt" + id).style.display = 'none';
                        --
                    }
                } {
                    {
                        --
                    }--
                }
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
