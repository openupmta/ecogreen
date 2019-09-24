@extends('admins.layouts.master')
@section('tuvan','active')
@section('title')
Danh sách chủ đề câu hỏi
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
                Danh sách chủ đề câu hỏi
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Danh sách chủ đề câu hỏi</li>
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
                            <a href="admin/question/frequent/add" class="btn btn-success">Thêm chủ đề câu hỏi</a>
                        </div>
                        <div class="box-header">

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Chủ đề câu hỏi</th>
                                        <th>Ảnh</th>
                                        <th class="col-md-2">Hành động</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cate as $item)
                                    <tr>
                                        <td>{{ $item->title }}</td>
                                        <td><img width="100px" src="images/{{ $item->image }}" alt=""></td>

                                        <td>
                                            <a class="btn btn-danger"
                                                href="admin/question/frequent/delete/{{ $item->id }}"
                                                onclick="return confirm('Hành động sẽ xóa chủ đề câu hỏi này! bạn có muốn tiếp tục?')">Xóa</a>
                                            <a class="btn btn-default" id="show"
                                                href="admin/question/frequent/edit/{{ $item->id }}"
                                                onclick="edit()"><i
                                                    class="fas fa-pencil-ruler"></i>Sửa</a>
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
