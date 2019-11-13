<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>Cổng thông tin điện tử - Đại Học Vinh</title>

    <link rel="stylesheet" href="assetlogin/css/bootstrap.css" />
    <link rel="stylesheet" href="assetlogin/css/fonts.css" />
    <link rel="stylesheet" href="assetlogin/css/mobile.css" />
    <link rel="stylesheet" href="assetlogin/css/fontello.css" />
    <link rel="stylesheet" href="assetlogin/css/login.css" />
    <link rel="icon" href="img/logo.png" />
</head>
<body>
    <div class="background"></div>
    <div class="main">
        <div class="container">
            <div class="panel col-md-8">
                <div class="panelImage col-md-6 col-sm-12 col-xs-12">
                    <div class="logo"></div>
                    <h2 class="university">Trường Đại học Vinh</h2>
                    <h3 class="portal">Cổng thông tin điện tử</h3>
                    <div style="bottom: 0; text-align: center; font-style: italic; color: #fff"><span>congthongtin@vinhuni.edu.vn</span></div>
                </div>
                <div class="panelLogin col-md-6 col-sm-12 col-xs-12" style="height: 380px">
                    @if($errors->any())
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                               <span class="sr-only">Close</span>
                            </button>
                        </div>
                    @endif
                    <form method="post" id="loginForm" action=""><div class="title">Đăng nhập</div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="errorBox"></div>
                        <input type="text" name="username" id="Username" placeholder="Tên đăng nhập" autofocus required />
                        <input type="password" name="password" id="Password" placeholder="Mật khẩu" required />
                        <br /><br />
                        <button type="submit" id="login_submit" autofocus>Đăng nhập</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="/assetlogin/vendors/depot/jquery-3.2.1.js"></script>
    <script>
        $("#loginForm").submit(function (e) {
            e.preventDefault();
            var $btn = $('#login_submit');
            $btn.attr('disabled', 'disabled');
            $btn.empty();
            $btn.addClass("button-loading");
            $username=$(' #loginForm input[name=username]').val();
            $password=$('#loginForm input[name=username]').val();
            $token=$('#loginForm input[name=_token]').val();
            $.ajax({
                type: "post",
                data: {
                    username: $username,
                    password: $password,
                    _token:$token
                },
                url: "/login",
                success: function (result) {
                    if (result == "success") {
                        window.location.href = "/";
                        $(".errorBox").hide();
                    }
                    if (result == "fail") {
                        $btn.removeAttr('disabled');
                        $btn.text("Đăng nhập");
                        $btn.removeClass("button-loading");
                        $(".errorBox").text("Sai tên đăng nhập hoặc mật khẩu");
                        $(".errorBox").slideDown(200).delay(7000).slideUp(200);
                        $("#Username").focus();
                    }
                }
            })
        })
    </script>
</body>
</html>