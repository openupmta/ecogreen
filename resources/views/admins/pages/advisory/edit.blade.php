@extends('admins.layouts.master')
@section('tuvan','active')
@section('title')
Sửa câu trả lời
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
            {{-- <h1>
                    Câu hỏi
            </h1> --}}
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Sửa câu trả lời</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12 km-right">
                    </b>
                   
                     

                            <p><br>
                                <label>Câu hỏi :</label>
                                <p>{{ $advisory->question }}</p>
                                {{--  <textarea class="form-control"  name="" style="width: 100%;
                                            height: 200px;
                                            background: #fff;
                                            margin-bottom: 10px;
                                            border: 1px solid #ccc;">{{ $advisory->question }}</textarea>  --}}
                            </p>
                        <form method="POST">
                            @csrf
                           
                        <label>Câu trả lời :</label>
                        <p><br>
                        <input type="hidden" name="id" value="{{ $advisory->id }}" >
                        <textarea class="form-control" name="name" style="width: 100%;
                                    height: 300px;
                                    background: #fff;
                                    margin-bottom: 10px;
                                    border: 1px solid #ccc;">{{ $advisory->cateanswers->answer }}</textarea></p>
                        <button style="align:right" type="submit" class="btn-danger btn">Sửa</button>
                       
                    </form>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->`
        </section>
        {{-- <script>
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

        </script> --}}
    </div>
</div>


@endsection
