@extends('admins.layouts.master')
@section('khuyenmai','active')
@section('title')
    Danh sách thành viên đã xử lí
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
                Thành viên đã xử lí
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Thành viên đã xử lí</li>
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
                            <a href="admin/catepromotion" class="btn btn-success">Danh sách thành viên chưa xử lí</a>
                        </div>
                        <div class="box-header">

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Email</th>
                                        <th>Trạng thái</th>
                                        <th>Thời gian</th>
                                        
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($catepromotion as $item)
                                    <tr>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>{{ Carbon\Carbon::parse($item->update_at)->format('d-m-Y') }}</td>
                                   
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
