@extends('admin.layout.index')

@section('content')
<script src="{{asset('backend/dist/js/extra.js')}}"></script>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
				<h1>Chào {{ Auth::user()->name }}</h1>
				
				<div class="clearfix"></div>
				<div class="col-lg-12">
					<div class="panel panel-default calen">
	                    <div class="panel-heading">
	                        <strong style="font-size: 20px;">Danh Sách các Bình luận mới</strong>
	                   	</div>
	                    <div class="panel-body">
	                    	<table class="table table-striped table-bordered table-hover" id="dataTables-example">
		                        <thead>
		                            <tr align="center">
		                                <th class="text-center">ID</th>
		                                <th class="text-center">Nội Dung</th>
		                                <th class="text-center">Tên Người Dùng</th>
		                                <th class="text-center">Tiêu Đề Bài Viết</th>
		                            </tr>
		                        </thead>
		                        <tbody>
		                            @foreach($comment as $cm)
		                                <tr class="odd gradeX" align="center">
		                                    <td>{{ $cm->id }}</td>
		                                    <td>{{ $cm->NoiDung }}</td>
		                                    <td>{{ $cm->User->name }}</td>
		                                    <td>{{ $cm->TinTuc->TieuDe }}</td>
		                                </tr>
		                            @endforeach
		                        </tbody>
		                    </table>
	                    </div>
	                </div>
					
				</div>

				<div class="col-lg-12">
					<div class="panel panel-default calen">
	                    <div class="panel-heading">
	                        <strong style="font-size: 20px;">Danh Sách Bài viết mới cập nhật</strong>
	                   	</div>
	                    <div class="panel-body">
	                    	<table class="table table-striped table-bordered table-hover" id="dataTables-example">
		                        <thead>
		                            <tr align="center">
		                                <th class="text-center">ID</th>
		                                <th class="text-center">Tiêu Đề</th>
		                                <th class="text-center">Tóm Tắt</th>
		                                <th class="text-center">Thuộc Loại Tin</th>
		                                <th class="text-center">Thuộc Thể Loại</th>
		                                <th class="text-center">Số Lượt Xem</th>
		                            </tr>
		                        </thead>
		                        <tbody>
		                            @foreach($tintuc as $tt)
		                                <tr class="odd gradeX" align="center">
		                                    <td>{{ $tt->id }}</td>
		                                    <td>{{ $tt->TieuDe }}</td>
		                                    <td>{{ $tt->TomTat }}</td>
		                                    <td>{{ $tt->LoaiTin->Ten }}</td>
		                                    <td>{{ $tt->LoaiTin->TheLoai->Ten }}</td>
		                                    <td>{{ $tt->SoLuotXem }}</td>
		                                </tr>
		                            @endforeach
		                        </tbody>
		                    </table>
	                    </div>
	                </div>
					
				</div>
            </div>
        </div>
    </div>
</div>
@endsection

