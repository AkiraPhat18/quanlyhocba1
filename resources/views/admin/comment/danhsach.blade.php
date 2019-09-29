@extends('layouts.metronictheme')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Đánh giá rèn luyện                             
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
                                <th>Tên học sinh</th>
                                <th>Tên lớp</th>
                                <th>Tình trạng</th>
                                <th>Hạnh kiểm</th>
                                <th>Nhận xét  kì 1</th>
                                <th>Nhận xét kì 2</th>
                                <th>Nhận xét năm<th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($comment as $cm)
                            <tr class="odd gradeX" align="center">
                                <td>{{$cm->id}}</td>
                                <td>{{$cm->tenhs}}</td>
                                <td>{{$cm->tenlop}}</td>
                                <td>{{$cm->tinhtrang}}</td>
                                <td>{{$cm->hanhkiem}}</td>
                                <td>{{$cm->nxki1}}</td>
                                <td>{{$cm->nxki2}}</td>
                                <td>{{$cm->nxnam}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/comment/xoa/{{$cm->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/comment/sua/{{$cm->id}}">Edit</a></td>
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