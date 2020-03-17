@extends('layout.index')
@section('content')
    <!-- Page Content -->
 <div class="container">
    <div class="row">

        <!-- Blog Post Content Column -->
        <div class="col-lg-9">

            <!-- Blog Post -->

            <!-- Title -->
            <h1>{{$tintuc->TieuDe}}</h1>

            <!-- Author -->
            <p class="lead">
                by <a href="#">admin</a>
            </p>

            <!-- Preview Image -->
            <img class="img-responsive" src="{{asset('public/upload/tintuc/'.$tintuc->Hinh)}}" alt="">

            <!-- Date/Time -->
            <p><span class="glyphicon glyphicon-time"></span> Posted on : {{$tintuc->created_at}}</p>
            <hr>

            <!-- Post Content -->
            <p class="lead">
                {!! $tintuc->NoiDung !!}
            </p>

            <hr>

            <!-- Blog Comments -->

            <!-- Comments Form -->
            @if(Auth::check())
            <div class="well">
                <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                @if(count($errors) > 0)
						@foreach($errors->all() as $err)
						<div class="alert alert-danger" style="margin-top: 1em;">
							<strong>{{ $err }}</strong><br/>
						</div>
						@endforeach
					@endif
                @if(session('thongbao'))
                <div class="alert alert-success">
                    <strong>{{session('thongbao')}} </strong>
                </div>    
            @endif
                <form action="{{asset('comment/'.$tintuc->id)}}" role="form" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea name="NoiDung" class="form-control"  rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Gửi</button>
                </form>
            </div>
            @endif
            <hr>

            <!-- Posted Comments -->

            <!-- Comment -->
            @foreach($tintuc->comment as $cm)
            <div class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" src="http://placehold.it/64x64" alt="">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">{{$cm->user->name}}
                        <small>{{$cm->created_at}}</small>
                    </h4>
                    {{$cm->NoiDung}}
                </div>
            </div>
            @endforeach
         
        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-3">

            <div class="panel panel-default">
                <div class="panel-heading"><b>Tin liên quan</b></div>
                <div class="panel-body">
                @foreach($tinlienquan as $tt)
                    <!-- item -->
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-5">
                            <a href="{{asset('tintuc/'.$tt->id.'/'.$tt->TenKhongDau.'.html')}}">
                                <img class="img-responsive" src="{{asset('public/upload/tintuc/'.$tt->Hinh)}}" alt="">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <a href="{{asset('tintuc/'.$tt->id.'/'.$tt->TenKhongDau.'.html')}}"><b>{{$tt->TieuDe}}</b></a>
                        </div>
                        <p style="padding-left:5px;">{{$tt->TomTat}}</p>
                        <div class="break"></div>
                    </div>
                    <!-- end item -->
                @endforeach

                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading"><b>Tin nổi bật</b></div>
                <div class="panel-body">
                    @foreach($tinoibat as $tt)
                    <!-- item -->
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-5">
                            <a href="{{asset('tintuc/'.$tt->id.'/'.$tt->TenKhongDau.'.html')}}">
                                <img class="img-responsive" src="{{asset('public/upload/tintuc/'.$tt->Hinh)}}" alt="">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <a href="{{asset('tintuc/'.$tt->id.'/'.$tt->TenKhongDau.'.html')}}"><b>{{$tt->TieuDe}}</b></a>
                        </div>
                        <p style="padding-left:5px;">{{$tt->TomTat}}</p>
                        <div class="break"></div>
                    </div>
                    <!-- end item -->
                    @endforeach
                </div>
            </div>
            
        </div>

    </div>
    <!-- /.row -->
</div>
<!-- end Page Content -->
@endsection
