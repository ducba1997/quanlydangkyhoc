@extends('layout')
@section('content')
<div class="span12">
    <div class="widget">
        <div class="widget-header">
            <i class="fa fa-users"></i>
            <h3>Danh sách tài khoản</h3>
        </div>
        <div class="widget-content">
            <div style="margin-bottom: 20px">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i> Thêm tài khoản mới</button>
            </div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th style="width: 30px"> STT</th>
                        <th style="width: auto"> Họ và tên</th>
                        <th style="width: 200px"> Mã đăng nhập</th>
                        <th style="width: 150px"> Ngành</th>
                        <th style="width: 100px"> Trạng thái</th>
                        <th class="td-actions" style="width: 140px">
                            <div class="btn-group">
                                <a class="btn btn-primary" href="#"> Tất cả</a>
                                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="" class="open-resetModal"> Admin</a></li>
                                    <li><a href="" class="open-resetModal"> Giảng viên</a></li>
                                    <li><a href="" class="open-resetModal"> Sinh viên</a></li>
                                </ul>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $data = DB::table('sinhvien')->get();
                    $stt = 1 ?>
                    @foreach($data as $item)
                    <tr>
                        <td>{{$stt}}</td>
                        <?php $u = DB::table('users')->where('username', $item->username)->first();
                        $stt++; ?>
                        <td>{{ $u->name }}</td>
                        <td>{{ $item->username }}</td>
                        <?php $n = DB::table('nganh')->where('id', $item->nganh_id)->first(); ?>
                        <td>{{$n->ten}}</td>
                        <td style="text-align: center">
                            <i class="fa fa-unlock"></i>
                        </td>
                        <td class="td-actions">
                            <div class="btn-group">
                                <a class="btn btn-primary" href="#">Tùy chọn</a>
                                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#editModal" class="open-editModal" data-id="{{ $item->id}}" data-name="{{$u->name}}" data-username="{{$u->username}}" data-class="{{$item->class}}" data-nganh="{{$item->nganh_id}}" data-dienthoai="{{$item->dienthoai}}" data-email="{{$item->email}}" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                    <li><a href="#resetModal" class="open-resetModal" data-username="{{$u->username}}" data-toggle="modal"><i class="fa fa-refresh"></i> Reset Password</a></li>
                                    <li><a href="#delModal" class="open-delModal" data-username="{{$u->username}}" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>


            <div id="myModal" class="modal  fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header">
                    <button type="button" id="dasdasd123" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Thêm tài khoản</h3>
                </div>
                <div class="modal-body">
                    <form onsubmit="return false;" id="saldnkdas" class="form-custom" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="row">
                            <div class="span9" style="text-align: center">
                                <h4 class="control-label">Thêm mới:</h4>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="span3">
                                <div class="form-group">
                                    <label class="control-label">Họ và tên:</label>
                                    <div class="controls">
                                        <input class="form-control" id="HoTen" name="name" placeholder="Nhập họ tên người dùng" type="text" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="span3">
                                <div class="form-group">
                                    <label class="control-label">Điện thoại:</label>
                                    <div class="controls">
                                        <input class="form-control" id="HoTen" name="dienthoai" placeholder="Nhập điện thoại người dùng" type="text" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="span3">
                                <div class="form-group">
                                    <label class="control-label">Lớp: </label>
                                    <div class="controls">
                                        <input class="form-control" name="class" placeholder="Nhập lớp người dùng học" type="text" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span3">
                                <div class="form-group">
                                    <label class="control-label">Mã đăng nhập:</label>
                                    <div class="controls">
                                        <input class="form-control" id="MaDN" name="username" placeholder="Nhập mã đăng nhập" type="text" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="span3">
                                <div class="form-group">
                                    <label class="control-label">Khoa:</label>
                                    <select class="form-control" name="nganh_id" class="span3">
                                        <?php $d1 = DB::table('nganh')->get() ?>
                                        @foreach($d1 as $item)
                                        <option value="{{$item->id}}">{{$item->ten}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="span3">
                                <div class="form-group">
                                    <label class="control-label">Email:</label>
                                    <div class="controls">
                                        <input class="form-control" id="HoTen" name="email" placeholder="Nhập email người dùng" type="text" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span3">
                                <div class="form-group">
                                    <label class="control-label">Mật khẩu:</label>
                                    <div class="controls">
                                        <input class="form-control" id="MatKhau" name="password" placeholder="Nhập mật khẩu" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="span3" style="text-align: center">
                                <div class="form-group">
                                    <label class="control-label">Ghi chú</label>
                                    <textarea class="form-control" name="ghichu" id="ghichu" rows="2"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span6">
                                <div class="form-actions">
                                    <button type="submit" id="jkbkajsdb" class="btn btn-primary">Thêm</button>
                                    <button type="reset" class="btn">Nhập lại</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Đóng</button>
                </div>
            </div>

            
            <div id="editModal" class="modal-custom fade edit-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Sửa thông tin tài khoản</h3>
                </div>
                <form action="{{ route('admin.editstudent') }}" class="form-custom" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="modal-body">
                        <input class="form-control username" id="username" name="username" placeholder="Nhập mã đăng nhập" type="hidden" value="">
                        <div class="row">
                            <div class="span3">
                                <div class="form-group">
                                    <label class="control-label">Họ và tên:</label>
                                    <div class="controls">
                                        <input class="form-control name" id="name" name="name" placeholder="Nhập họ tên người dùng" type="text" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span3">
                                <div class="form-group">
                                    <label class="control-label">Nhóm:</label>
                                    <select class="form-control" name="nganh_id" class="span4" id="nganh_id">
                                        @foreach($d1 as $item)
                                        <option value="{{$item->id}}">{{$item->ten}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span3">
                                <div class="form-group">
                                    <label class="control-label">Điện thoại :</label>
                                    <div class="controls">
                                        <input class="form-control dienthoai" id="dienthoai" name="dienthoai" placeholder="Nhập điện thoại người dùng" type="text" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span3">
                                <div class="form-group">
                                    <label class="control-label">Email :</label>
                                    <div class="controls">
                                        <input class="form-control email" id="email" name="email" placeholder="Nhập email người dùng" type="text" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Hủy</button>
                        <button class="btn btn-primary">Sửa</button>
                    </div>
                </form>
            </div>


            <div id="delModal" class="modal-custom fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Xóa tài khoản</h3>
                </div>
                <form action="{{route('admin.deletestudent')}}" class="form-custom" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="modal-body">
                        <div class="row">
                            <div class="span4">
                                <div class="control-group">
                                    <input type="hidden" name="username" id="deletestudent" class="username" value="">
                                    <label class="control-label">Bạn có chắc chắn muốn xóa tài khoản này?</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Không</button>
                        <button class="btn btn-primary" type="submit">Có</button>
                    </div>
                </form>
            </div>

            <div id="resetModal" class="modal-custom  fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Khôi phục mật khẩu</h3>
                </div>
                <form onsubmit="return false;" class="form-custom" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="modal-body">
                        <div class="row">
                            <div class="span4">
                                <div class="control-group">
                                    <input type="hidden" name="username" class="username" value="">
                                    <label class="control-label">Bạn có chắc chắn muốn khôi phục mật khẩu của tài khoản này?</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" id="sadjasdjhaskdhaskjdhkj" data-dismiss="modal" aria-hidden="true">Không</button>
                        <button class="btn btn-primary" id="safasajskhqh12" type="submit">Có</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    //Sửa
    $('#safasajskhqh12').on('click', function() {
        $username = $('#resetModal form input[name=username]').val();
        $token = $('#resetModal form input[name=_token]').val();
        $('#sadjasdjhaskdhaskjdhkj').click();
        $.ajax({
            type: "post",
            data: {
                username: $username,
                _token: $token
            },


            url: "{{route('admin.recoverpassstudent')}}",
            statusCode: {
                200: function(data) {
                    $.toast({
                        heading: 'Thông tin',
                        text: 'Khôi phục mật khẩu thành công',
                        icon: 'success',
                        loader: true,
                        loaderBg: 'green',
                        position: 'mid-center'
                    });
                }

            }
        });
    });
    $('#jkbkajsdb').on('click', function() {
        $data = $('.modal-body form').serialize();
        $("#dasdasd123").click();
        $.ajax({
            type: "post",
            data: $data,
            url: "{{route('admin.addstudent')}}",
            statusCode: {
                201: function(data) {
                    $("table tbody").prepend(data);
                    $("#saldnkdas").trigger('reset');

                    $.toast({
                        heading: 'Thông tin',
                        text: 'Thêm dữ liệu thành công',
                        icon: 'success',
                        loader: true,
                        loaderBg: 'green',
                        position: 'mid-center'
                    });
                }
            }
        });
    });
    $(".container .mainnav li:eq(1)").addClass('active');
    $(document).on("click", ".open-editModal", function() {
        var id = $(this).data('id');
        var name = $(this).data('name');
        var un = $(this).data('username');
        var dt = $(this).data('dienthoai');
        var em = $(this).data('email');
        var ng = $(this).data('nganh');
        $(".edit-modal .modal-body .id").val(id);
        $(".edit-modal .modal-body .name").val(name);
        $(".edit-modal .modal-body .username").val(un);
        $(".edit-modal .modal-body .dienthoai").val(dt);
        $(".edit-modal .modal-body .email").val(em);
        $('#nganh_id option[value="' + ng + '"]').prop('selected', true);
    });

    //Xóa
    $(document).on("click", ".open-delModal", function() {
        var username = $(this).data('username');
        $(".modal-body #deletestudent").val(username);
    });
    //Khôi phục tk
    $(document).on("click", ".open-resetModal", function() {
        var id = $(this).data('username');
        $("#resetModal .modal-body .username").val(id);
    });
    $(document).ready(function (){
        @if(Session::has('message'))
                {!! Session::get('message') !!}
        @endif
    });
</script>
@endsection