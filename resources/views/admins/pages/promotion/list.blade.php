@extends('admins.layouts.master')
@section('khuyenmai','active')
@section('title')
Danh sách khuyến mại
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
                Danh khuyến mại
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">khuyến mại</li>
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
                            <a href="admin/promotion/add" class="btn btn-success">Thêm</a>
                        </div>
                        <div class="box-header">

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Ảnh</th>
                                        <th>Tiêu đề</th>
                                        <th>Nội dung</th>
                                        <th>Link</th>
                                        <th class="col-md-2">Hotline</th>
                                        <th class="col-md-2">Hành động</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($promotion as $item)
                                    <tr>
                                    <td><img width="200px" height="100px" src="images/{{ $item->image }}"></td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->content}}</td>
                                    <td>{{$item->link}}</td>
                                    <td>{{$item->hotline}}</td>
                                    <td>
                                        <a class="btn btn-danger" href="{{ url('admin/promotion/delete/'.$item->id) }}"
                                            onclick="return confirm('Hành động sẽ xóa banner này! bạn có muốn tiếp tục?')">Xóa</a>
                                        <a class="btn btn-default" id="show" href="admin/promotion/edit/{{ $item->id }}"
                                            onclick="edit({{ $item->id }})"><i class="fas fa-pencil-ruler"></i>Sửa</a>
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
