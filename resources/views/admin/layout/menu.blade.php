<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="{{asset('admin/home')}}"><i class="fa fa-dashboard fa-fw"></i>Bảng điều khiển</a>
            </li>
            <li>
                <a href="{{asset('admin/theloai/danhsach')}}"><i class="fa fa-th-list fa-fw"></i>Thể loại<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{asset('admin/theloai/danhsach')}}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{asset('admin/theloai/them')}}">Thêm</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{asset('admin/loaitin/danhsach')}}"><i class="fa fa-list-alt fa-fw"></i>Loại Tin<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{asset('admin/loaitin/danhsach')}}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{asset('admin/loaitin/them')}}">Thêm</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{asset('admin/tintuc/danhsach')}}"><i class="fa fa-newspaper-o fa-fw"></i>Tin Tức<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{asset('admin/tintuc/danhsach')}}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{asset('admin/tintuc/them')}}">Thêm</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{asset('admin/slide/danhsach')}}"><i class="fa fa-sliders fa-fw"></i>Slide<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{asset('admin/slide/danhsach')}}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{asset('admin/slide/them')}}">Thêm</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{asset('admin/user/danhsach')}}"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{asset('admin/user/danhsach')}}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{asset('admin/user/them')}}">Thêm</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>