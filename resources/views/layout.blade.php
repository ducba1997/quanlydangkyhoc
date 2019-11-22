<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cổng thông tin điện tử Đại học Vinh</title>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet" />
    <link href=" {{ URL::asset('/css/bootstrap.css')}}" rel="stylesheet" />
    <link href=" {{ URL::asset('/css/datatables/dataTables.bootstrap.css')}}" rel="stylesheet" />
    <link href=" {{ URL::asset('/css/datetimepicker/bootstrap-datetimepicker.css')}}" rel="stylesheet" />
    <link href=" {{ URL::asset('/css/datetimepicker/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" />
    <link href=" {{ URL::asset('/css/glyphicon.css')}}" rel="stylesheet" />
    <link href=" {{ URL::asset('/css/base-admin-responsive.css')}}" rel="stylesheet" />
    <link href=" {{ URL::asset('/css/bootstrap.css')}}" rel="stylesheet" />
    <link href=" {{ URL::asset('/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href=" {{ URL::asset('/css/glyphicon.css')}}" rel="stylesheet" />
    <link href=" {{ URL::asset('/css/plan.css')}}" rel="stylesheet" />
    <link href=" {{ URL::asset('/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href=" {{ URL::asset('/css/style.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ URL::asset('/css/jquery.toast.css')}}">
    <link href=" {{ URL::asset('/css/bootstrap-responsive.min.css')}}" rel="stylesheet" />
    <script type="text/javascript" src="{{ URL::asset('/js/jquery-1.7.2.min.js')}}"></script>
    <link rel="shortcut icon" href="{{ URL::asset('/img/logo.png')}}" type="image/x-icon">
    @yield('css')
</head>

<body >
    @include('header')
    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer-inner">
            <div class="container">
                <div class="row">
                    <div class="span12"> &copy; 2019 <a href="/">Trường Đại học Vinh</a>. </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ URL::asset('/js/jquery-1.7.2.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('/js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('/js/datetimepicker.js')}}"></script>

    <script src="{{ URL::asset('/js/jquery.toast.js')}}"></script>
</body>

</html>