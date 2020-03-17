@extends('layout.index')
@section('content')
    <!-- Page Content -->
<div class="container">

   @include('layout.slide')

    <div class="space20"></div>


    <div class="row main-left">
        @include('layout.menu')

        <div class="col-md-9">
            <div class="panel panel-default">            
                <div class="panel-heading" style="background-color:#337AB7; color:white;" >
                    <h2 style="margin-top:0px; margin-bottom:0px;">Giới thiệu</h2>
                </div>

                <div class="panel-body">
                    <!-- item -->
                    <p>
                        Trang web được làm lại dựa trên video hướng dẫn của khoa phạm bằng phiên bản 5.6.4
                    </p>
 
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/SmHttprYOn4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                 
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- end Page Content -->
@endsection