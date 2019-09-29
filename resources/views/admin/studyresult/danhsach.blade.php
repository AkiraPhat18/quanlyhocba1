@extends('layouts.metronictheme')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Kết quả học tập                         
                        </h1>
                        <small>Năm học 2015-2016</small>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên HS</th>
                                <th>Tên Giáo viên</th>
                                <th>Tên môn</th>
                                <th>Loại bài kiểm tra</th>
                                <th>Điểm</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($studyresult as $st)
                            <tr class="odd gradeX" align="center">
                                <td>{{$st->id}}</td>
                                <td>{{$st->tenhs}}</td>
                                <td>{{$st->tengv}}</td>
                                <td>{{$st->tenmon}}</td>
                                <td>{{$st->loaibaikt}}</td>
                                <td>{{$st->diem}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/theloai/xoa/{{$st->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/theloai/sua/{{$st->id}}">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection