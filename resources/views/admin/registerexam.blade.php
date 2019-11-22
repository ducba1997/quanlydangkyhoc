@extends('layout')
@section('content')
<div class="span3">
    <div class="widget">
        <div class="widget-header">
            <i class="fa fa-check-square"></i>
            <h3>Quản lý đăng ký tín chỉ</h3>
        </div>
        <div class="widget-content">
            <ul>
                <li ><a style="color: #428bca" href="/Admin/SubscriptionList">Danh sách sinh viên đăng ký</a></li>
                <li><a style="color: #428bca"  href="/Admin/ClassOpen">Lớp học phần đang mở đăng ký</a></li>
                <li><a style="color: #428bca"  href="/Admin/PartialClasses">Danh sách lớp học phần</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="span9">

    <div class="widget">
        <div class="widget-header">
            <i class="fa fa-list"></i>
            <h3>Danh sách lớp học phần</h3>
        </div>
        <div class="widget-content">
            <div style="margin-bottom: 20px">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#selectModal"><i class="fa fa-search"></i> Xem danh sách theo</button>
            </div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th style="width: 30px"> STT</th>
                        <th style="width: 80px"> Mã học phần</th>
                        <th style="width: auto"> Tên học phần</th>
                        <th style="width: 40px"> Số TC</th>
                        <th style="width: 200px"> Ngành</th>
                        <th class="td-actions" style="width: 30px"> </th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $(".container .mainnav li:eq(4)").addClass('active');
</script>
@endsection