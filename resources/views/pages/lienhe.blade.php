@extends('layout.index')
<!-- Page Content -->
@section('content')
<div class="container">

   @include('layout.slide')

    <div class="space20"></div>


    <div class="row main-left">
        @include('layout.menu')

        <div class="col-md-9">
            <div class="panel panel-default">            
                <div class="panel-heading" style="background-color:#337AB7; color:white;" >
                    <h2 style="margin-top:0px; margin-bottom:0px;">Liên hệ</h2>
                </div>

                <div class="panel-body">
                    <!-- item -->
                    <h3><span class="glyphicon glyphicon-align-left"></span> Thông tin liên hệ</h3>
                    
                    <div class="break"></div>
                       <h4><span class= "glyphicon glyphicon-home "></span> Địa chỉ : </h4>
                    <p>254 Nguyễn Văn Linh, P, Thanh Khê, Đà Nẵng 550000, Việt Nam </p>

                    <h4><span class="glyphicon glyphicon-envelope"></span> Email : </h4>
                    <p>254 Nguyễn Văn Linh, P, Thanh Khê, Đà Nẵng 550000, Việt Nam </p>

                    <h4><span class="glyphicon glyphicon-phone-alt"></span> Điện thoại : </h4>
                    <p>254 Nguyễn Văn Linh, P, Thanh Khê, Đà Nẵng 550000, Việt Nam </p>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11162.018759066868!2d108.20986826276813!3d16.064237939206784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x96e408c6b0419760!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBEdXkgVMOibg!5e0!3m2!1svi!2s!4v1583593575972!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

                    <br><br>
                    <h3><span class="glyphicon glyphicon-globe"></span> Bản đồ</h3>
                    <div class="break"></div><br>

                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
@endsection

<!-- end Page Content -->