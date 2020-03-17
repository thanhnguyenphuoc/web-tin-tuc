<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Phước Thành| @yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('public/css/shop-homepage.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/my.css')}}" rel="stylesheet">
    
    @yield('css')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  
    @include('layout.header')

    @yield('content')

    @include('layout.footer')
   
    <!-- end Footer -->
    <!-- jQuery -->
    <script src="{{asset('public/js/jquery.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('public/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/js/my.js')}}"></script>

    @yield('script')
    <div style="text-align: left;" id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-login">

            <!-- Modal content-->
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Đăng nhập</h4></div>
                <div class="panel-body">

                    <form action="{{asset('dangnhap')}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div>
                            <label>Email</label>
                            <input type="email" class="form-control input" placeholder="Địa Chỉ Email" name="email" 
                            >
                        </div>
                        <br>    
                        <div>
                            <label>Mật khẩu</label>
                            <input type="password" class="form-control" placeholder="Mật Khẩu" name="password">
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Đăng nhập
                            </button>    
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
