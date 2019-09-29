@extends('layouts.metronictheme')

@section('content')
	<!-- Page Content -->
	<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Lớp 12A2</h1>                          
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
                                <th>Ten</th>
								<th>Ngày sinh</th>
								<th>Giới tính</th>
								<th>Dân tộc</th>
								<th>Quê quán</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $st)
                            <tr class="odd gradeX" align="center">
                                <td>{{$st->id}}</td>
                                <td>{{$st->tenhs}}</td>
                                <td>{{$st->ngaysinh}}</td>
                                <td>{{$st->gioitinh}}</td>
                                <td>{{$st->dantoc}}</td>
                                <td>{{$st->quequan}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{ route('xoastudent',@$st->id) }}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/students/sua/{{$st->id}}">Edit</a></td>
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

@section('js')
	<script type="text/javascript" src="{{asset('js/students/validation.js')}}"></script>
@endsection