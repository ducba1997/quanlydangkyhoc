<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </a>
            <a class="brand" href="/">Trang Thông tin Đào tạo - Trường Cao đẳng Công nghệ Thông tin</a>
            <div class="nav-collapse">
            <form action="{{ route('logout') }}" class="navbar-search pull-right" method="post">        
            <input type="hidden" name="_token" value="{{csrf_token()}}" >                        
                <span class="current-info">{{ Auth::user()->name }}</span>
                            <input class="btn-login" id="dangxuat" type="submit" value="Đăng xuất">
                    </form>            
                </div>
        </div>
    </div>
</div>
<div class="subnavbar original" style="visibility: visible;">
    <div class="subnavbar-inner">
        <div class="container">
            <ul class="mainnav">
                    <li><a href="/Student/Result"><i class="fa fa-user"></i><span>Trang Cá nhân</span></a></li>
                    <li class="active"><a href="/Student/Register"><i class="fa fa-check-square"></i><span>Đăng ký học tập</span></a></li>
                    <li class="subnavbar-open-right"><a href="/Student/Guide"><i class="fa fa-question-circle"></i><span>Hướng dẫn</span></a></li>
            </ul>
        </div>
    </div>
</div>