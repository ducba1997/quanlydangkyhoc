<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trường Cao đẳng Công nghệ Thông tin</title>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet" />
    <link href=" {{ URL::asset('/css/bootstrap.css')}}" rel="stylesheet" />
    <link href=" {{ URL::asset('/css/datatables/dataTables.bootstrap.css')}}" rel="stylesheet" />
    <link href=" {{ URL::asset('/css/datetimepicker/bootstrap-datetimepicker.css')}}" rel="stylesheet" />
    <link href=" {{ URL::asset('/css/datetimepicker/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" />
    <link href=" {{ URL::asset('/css/glyphicon.css')}}" rel="stylesheet" />
    <link href=" {{ URL::asset('/css/base-admin-responsive.css')}}" rel="stylesheet" />
    <link href=" {{ URL::asset('/css/bootstrap-responsive.min.css')}}" rel="stylesheet" />
    <link href=" {{ URL::asset('/css/bootstrap.css')}}" rel="stylesheet" />
    <link href=" {{ URL::asset('/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href=" {{ URL::asset('/css/glyphicon.css')}}" rel="stylesheet" />
    <link href=" {{ URL::asset('/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href=" {{ URL::asset('/css/style.css')}}" rel="stylesheet" />
</head>
<body>
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
                        <div class="span12"> &copy; 2015 <a href="http://www.cit.udn.vn/">Trường Cao đẳng Công nghệ Thông tin - Đại Học Đà Nẵng</a>. </div>
                    </div>
                </div>
            </div>
        </div>
    <script type="text/javascript" src="{{ URL::asset('/js/jquery.js')}}">
    <script type="text/javascript" src="{{ URL::asset('/js/bootstrap.js')}}">
    <script type="text/javascript" src="{{ URL::asset('/js/datetimepicker.js')}}">
    <script type="text/javascript">
        /* Menu Handler */
        $(function () {
            var url = window.location.pathname;
            var activePage = url.substring(url.lastIndexOf('/') + 1);
            $('.mainnav li a').each(function () {
                var currentPage = this.href.substring(this.href.lastIndexOf('/') + 1);

                if (activePage == currentPage) {
                    $(this).parent().addClass('active');
                }
            });
        });

        $('.subnavbar').addClass('original').clone().insertAfter('.subnavbar').addClass('cloned').css('position', 'fixed').css('width', '100%').css('top', '0').css('margin-top', '0').css('z-index', '500').removeClass('original').hide();
        scrollIntervalID = setInterval(stickIt, 10);
        function stickIt() {
            var orgElementPos = $('.original').offset();
            orgElementTop = orgElementPos.top;
            if ($(window).scrollTop() >= (orgElementTop)) {
                orgElement = $('.original');
                coordsOrgElement = orgElement.offset();
                leftOrgElement = coordsOrgElement.left;
                widthOrgElement = orgElement.css('width');

                $('.cloned').css('left', leftOrgElement + 'px').css('top', 0).css('width', widthOrgElement + 'px').show();
                $('.original').css('visibility', 'hidden');
            } else {
                $('.cloned').hide();
                $('.original').css('visibility', 'visible');
            }
        }

        //FAQ
        $(function () {
            $('.faq-list').goFaq();
        });

        //Datetimepicker
        $(function () {
            $('#datetimepicker').datetimepicker({
                format: "dd/mm/yyyy",
                language: 'vi',
                weekStart: 1,
                todayBtn: 1,
                autoclose: 1,
                todayHighlight: 1,
                startView: 2,
                minView: 2,
                forceParse: 0
            });
            $('#datetimepicker-open').datetimepicker({
                format: "dd/mm/yyyy HH:ii:ss P",
                showMeridian: true,
                autoclose: true,
                todayBtn: true,
                language: 'vi',
                minuteStep: 10
            });
            $('#datetimepicker-close').datetimepicker({
                format: "dd/mm/yyyy HH:ii:ss P",
                showMeridian: true,
                autoclose: true,
                todayBtn: true,
                language: 'vi',
                minuteStep: 10
            });
            $('#datetimepicker-open').datetimepicker().on('changeDate', function (ev) {
                $('#datetimepicker-close').datetimepicker('setStartDate', ev.date);
            });
            $('#datetimepicker-close').datetimepicker().on('changeDate', function (ev) {
                $('#datetimepicker-open').datetimepicker('setEndDate', ev.date);
            });
        });
    </script>
</body>
</html>
