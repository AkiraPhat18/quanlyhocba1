@extends('layouts.metronictheme')

@section('subheader')
    Học sinh
@endsection

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7" style="padding-bottom:120px">
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

                    <form action="them" method="POST" >
                        @csrf
                        <div class="form-group">
                            <label>Tên học sinh </label>
                            <input class="form-control" name="HocSinh" placeholder="Nhập tên học sinh" />
                        </div>
                        <div class="form-group">
                            <label>Ngày sinh</label>
                            <input class="form-control" name="birthday" placeholder="Nhập ngày sinh" />
                        </div>
                        <div class="form-group">
                            <label>Giới tính </label>
                            <input class="form-control" name="gt" placeholder="Nhập giới tính" />
                        </div>
                        <div class="form-group">
                            <label>Dân tộc</label>
                            <input class="form-control" name="general" placeholder="Nhập dân tộc" />
                        </div>
                        <div class="form-group">
                            <label>Quê quán</label>
                            <input class="form-control" name="country" placeholder="Nhập quê quán" />
                        </div>
                        <button type="submit" class="btn btn-default">Thêm</button>
                        <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection

