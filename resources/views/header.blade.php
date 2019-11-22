<div class="navbar navbar-fixed-top" style="background-color: #2980B9">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </a>
            <a class="brand" style="height: 35px;top: -5px;width: 60px;" href="/"><img src="{{ URL::asset('/img/logo.png')}}" alt="" srcset="" width="35px" height="35px"></a>
            <a class="brand" href="/">CỔNG THÔNG TIN SINH VIÊN</a>
            <div class="nav-collapse">
                @if(Auth::check())
                <form action="{{ route('logout') }}" class="navbar-search pull-right" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <span class="current-info">{{Auth::user()->name}}</span>
                    <input class="btn-login" id="dangxuat" type="submit" value="Đăng xuất">
                </form>
                @endif
            </div>
        </div>
    </div>
</div>
@if(Auth::check())
@if(Auth::user()->level==1)
<div class="subnavbar original" style="visibility: visible;">
    <div class="subnavbar-inner">
        <div class="container">
            <ul class="mainnav">
                <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i><span>Bảng điều khiển</span></a></li>
                <li ><a href="{{route('admin.student')}}"><i class="fa fa-users"></i><span>Quản lý sinh viên</span></a></li>
                <li ><a href="{{route('admin.teacher')}}"><i class="fa fa-users"></i><span>Quản lý giảng viên</span></a></li>
                <li class="subnavbar-open-right"><a href="{{route('admin.notification')}}"><i class="fa fa-bullhorn"></i><span>Quản lý thông báo</span></a></li>
                <li><a href="{{route('admin.registerexam')}}"><i class="fa fa-check-square"></i><span>Quản lý ĐK tín chỉ</span></a></li>
            </ul>
        </div>
    </div>
</div>
@endif
@if(Auth::user()->level==3)
<div class="subnavbar original" style="visibility: visible;">
    <div class="subnavbar-inner">
        <div class="container">
            <ul class="mainnav">
                <li><a href="{{route('student.dashboard')}}"><i class="fa fa-dashboard"></i><span>Trang cá nhân</span></a></li>
                <li><a href="{{route('student.registerg')}}"><i class="fa fa-check-square"></i><span>Đăng ký học tập</span></a></li>
                <li ><a href="{{route('admin.student')}}"><i class="fa fa-users"></i><span>Thay đổi thông tin</span></a></li>
            </ul>
        </div>
    </div>
</div>
@endif
@endif