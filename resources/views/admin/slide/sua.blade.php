@extends('admin.layout.index')

@section('content')
    
<!-- Page Content -->
<div id="page-wrapper">
   <div class="container-fluid">
       <div class="row">
           <div class="col-lg-12">
               <h1 class="page-header">Slide
                   <small>{{$slide->Ten}}</small>
               </h1>
           </div>
           <!-- /.col-lg-12 -->
           <div class="col-lg-7" style="padding-bottom:120px">
               @if(count($errors)>0)
               <div class="alert alert-danger">
                   @foreach($errors->all () as $err)
                  <strong>{{$err}}</strong> <br>
                   @endforeach
               </div>
           @endif
           @if(session('thongbao'))
               <div class="alert alert-success">
                   <strong>{{session('thongbao')}} </strong>
               </div>    
           @endif
               <form action="{{asset('admin/slide/sua/'.$slide->id)}}" method="POST" enctype="multipart/form-data">
               <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                   <div class="form-group">
                       <label>Tên</label>
                       <input class="form-control" name="Ten" placeholder="Nhập tên" />
                   </div>
                   <div class="form-group">
                       <label>Nội dung</label>
                       <textarea id="demo" name="NoiDung" class="form-control ckeditor" rows="5">
                           {{$slide->NoiDung}}
                       </textarea>
                   </div>
                 <div class="form-group">
                        <label>link</label>
                 <input class="form-control" name="link" placeholder="Nhập link" value="{{$slide->link}}" />
                 </div>
                   <div class="form-group">
                       <label>Hình ảnh</label>
                       <p>
                        <img  width="100px" src="{{URL::to('public/upload/slide/'.$slide->Hinh)}}"/>
                     </p>
                       <input type="file" name="Hinh" class="form-control">
                   </div>
                   <button type="submit" class="btn btn-default">Sửa</button>
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
