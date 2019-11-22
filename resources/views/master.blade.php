@extends('layout')
@section('content')
@if(Auth::user()->level==1)
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
                        <th style="width: 150px"> Nhóm</th>
                        <th style="width: 100px"> Trạng thái</th>
                        <th class="td-actions" style="width: 140px">
                            <div class="btn-group">
                                <a class="btn btn-primary" href="/Admin/Member"> Tất cả</a>
                                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/Admin/Member/1" class="open-resetModal"> Admin</a></li>
                                    <li><a href="/Admin/Member/4" class="open-resetModal"> Giảng viên</a></li>
                                    <li><a href="/Admin/Member/5" class="open-resetModal"> Sinh viên</a></li>
                                </ul>
                            </div>

                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Trịnh Thị Ái</td>
                        <td>1382109002</td>
                        <td>
                            Sinh viên </td>
                        <td style="text-align: center">
                            <i class="fa fa-unlock"></i>
                        </td>
                        <td class="td-actions">


                            <div class="btn-group">
                                <a class="btn btn-primary" href="#">Tùy chọn</a>
                                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#editModal" class="open-editModal" data-id="19" data-fullname="Trịnh Thị Ái" data-username="1382109002" data-pwd="123" data-group="5" data-lock="False" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                    <li><a href="#resetModal" class="open-resetModal" data-id="19" data-toggle="modal"><i class="fa fa-refresh"></i> Reset Password</a></li>
                                    <li><a href="#banModal" class="open-banModal" data-id="19" data-toggle="modal"><i class="fa fa-lock"></i> Lock</a></li>
                                    <li><a href="#delModal" class="open-delModal" data-id="19" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td> Đặng Thị Ngọc Ánh</td>
                        <td>1382208001</td>
                        <td>
                            Sinh viên </td>
                        <td style="text-align: center">
                            <i class="fa fa-unlock"></i>
                        </td>
                        <td class="td-actions">


                            <div class="btn-group">
                                <a class="btn btn-primary" href="#">Tùy chọn</a>
                                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#editModal" class="open-editModal" data-id="18" data-fullname=" Đặng Thị Ngọc Ánh" data-username="1382208001" data-pwd="123" data-group="5" data-lock="False" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                    <li><a href="#resetModal" class="open-resetModal" data-id="18" data-toggle="modal"><i class="fa fa-refresh"></i> Reset Password</a></li>
                                    <li><a href="#banModal" class="open-banModal" data-id="18" data-toggle="modal"><i class="fa fa-lock"></i> Lock</a></li>
                                    <li><a href="#delModal" class="open-delModal" data-id="18" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Phạm Thị Thu</td>
                        <td>102120301</td>
                        <td>
                            Sinh viên </td>
                        <td style="text-align: center">
                            <i class="fa fa-unlock"></i>
                        </td>
                        <td class="td-actions">


                            <div class="btn-group">
                                <a class="btn btn-primary" href="#">Tùy chọn</a>
                                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#editModal" class="open-editModal" data-id="17" data-fullname="Phạm Thị Thu" data-username="102120301" data-pwd="123" data-group="5" data-lock="False" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                    <li><a href="#resetModal" class="open-resetModal" data-id="17" data-toggle="modal"><i class="fa fa-refresh"></i> Reset Password</a></li>
                                    <li><a href="#banModal" class="open-banModal" data-id="17" data-toggle="modal"><i class="fa fa-lock"></i> Lock</a></li>
                                    <li><a href="#delModal" class="open-delModal" data-id="17" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Huỳnh Quang Hiếu</td>
                        <td>1234567</td>
                        <td>
                            Sinh viên </td>
                        <td style="text-align: center">
                            <i class="fa fa-unlock"></i>
                        </td>
                        <td class="td-actions">


                            <div class="btn-group">
                                <a class="btn btn-primary" href="#">Tùy chọn</a>
                                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#editModal" class="open-editModal" data-id="16" data-fullname="Huỳnh Quang Hiếu" data-username="1234567" data-pwd="123" data-group="5" data-lock="False" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                    <li><a href="#resetModal" class="open-resetModal" data-id="16" data-toggle="modal"><i class="fa fa-refresh"></i> Reset Password</a></li>
                                    <li><a href="#banModal" class="open-banModal" data-id="16" data-toggle="modal"><i class="fa fa-lock"></i> Lock</a></li>
                                    <li><a href="#delModal" class="open-delModal" data-id="16" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Cao Thị Thoa</td>
                        <td>102120303</td>
                        <td>
                            Sinh viên </td>
                        <td style="text-align: center">
                            <i class="fa fa-unlock"></i>
                        </td>
                        <td class="td-actions">


                            <div class="btn-group">
                                <a class="btn btn-primary" href="#">Tùy chọn</a>
                                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#editModal" class="open-editModal" data-id="15" data-fullname="Cao Thị Thoa" data-username="102120303" data-pwd="123" data-group="5" data-lock="False" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                    <li><a href="#resetModal" class="open-resetModal" data-id="15" data-toggle="modal"><i class="fa fa-refresh"></i> Reset Password</a></li>
                                    <li><a href="#banModal" class="open-banModal" data-id="15" data-toggle="modal"><i class="fa fa-lock"></i> Lock</a></li>
                                    <li><a href="#delModal" class="open-delModal" data-id="15" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Tưởng Thị Thu</td>
                        <td>1422113001</td>
                        <td>
                            Sinh viên </td>
                        <td style="text-align: center">
                            <i class="fa fa-unlock"></i>
                        </td>
                        <td class="td-actions">


                            <div class="btn-group">
                                <a class="btn btn-primary" href="#">Tùy chọn</a>
                                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#editModal" class="open-editModal" data-id="12" data-fullname="Tưởng Thị Thu" data-username="1422113001" data-pwd="123" data-group="5" data-lock="False" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                    <li><a href="#resetModal" class="open-resetModal" data-id="12" data-toggle="modal"><i class="fa fa-refresh"></i> Reset Password</a></li>
                                    <li><a href="#banModal" class="open-banModal" data-id="12" data-toggle="modal"><i class="fa fa-lock"></i> Lock</a></li>
                                    <li><a href="#delModal" class="open-delModal" data-id="12" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Trương Thế Anh</td>
                        <td>1382109167</td>
                        <td>
                            Sinh viên </td>
                        <td style="text-align: center">
                            <i class="fa fa-unlock"></i>
                        </td>
                        <td class="td-actions">


                            <div class="btn-group">
                                <a class="btn btn-primary" href="#">Tùy chọn</a>
                                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#editModal" class="open-editModal" data-id="11" data-fullname="Trương Thế Anh" data-username="1382109167" data-pwd="123" data-group="5" data-lock="False" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                    <li><a href="#resetModal" class="open-resetModal" data-id="11" data-toggle="modal"><i class="fa fa-refresh"></i> Reset Password</a></li>
                                    <li><a href="#banModal" class="open-banModal" data-id="11" data-toggle="modal"><i class="fa fa-lock"></i> Lock</a></li>
                                    <li><a href="#delModal" class="open-delModal" data-id="11" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Phạm Hữu Trí</td>
                        <td>1382110092</td>
                        <td>
                            Sinh viên </td>
                        <td style="text-align: center">
                            <i class="fa fa-unlock"></i>
                        </td>
                        <td class="td-actions">


                            <div class="btn-group">
                                <a class="btn btn-primary" href="#">Tùy chọn</a>
                                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#editModal" class="open-editModal" data-id="10" data-fullname="Phạm Hữu Trí" data-username="1382110092" data-pwd="123" data-group="5" data-lock="False" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                    <li><a href="#resetModal" class="open-resetModal" data-id="10" data-toggle="modal"><i class="fa fa-refresh"></i> Reset Password</a></li>
                                    <li><a href="#banModal" class="open-banModal" data-id="10" data-toggle="modal"><i class="fa fa-lock"></i> Lock</a></li>
                                    <li><a href="#delModal" class="open-delModal" data-id="10" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Vũ Văn Hải</td>
                        <td>102120304</td>
                        <td>
                            Sinh viên </td>
                        <td style="text-align: center">
                            <i class="fa fa-unlock"></i>
                        </td>
                        <td class="td-actions">


                            <div class="btn-group">
                                <a class="btn btn-primary" href="#">Tùy chọn</a>
                                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#editModal" class="open-editModal" data-id="5" data-fullname="Vũ Văn Hải" data-username="102120304" data-pwd="123" data-group="5" data-lock="False" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                    <li><a href="#resetModal" class="open-resetModal" data-id="5" data-toggle="modal"><i class="fa fa-refresh"></i> Reset Password</a></li>
                                    <li><a href="#banModal" class="open-banModal" data-id="5" data-toggle="modal"><i class="fa fa-lock"></i> Lock</a></li>
                                    <li><a href="#delModal" class="open-delModal" data-id="5" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Huỳnh Công Pháp</td>
                        <td>102120305</td>
                        <td>
                            Giáo viên </td>
                        <td style="text-align: center">
                            <i class="fa fa-unlock"></i>
                        </td>
                        <td class="td-actions">


                            <div class="btn-group">
                                <a class="btn btn-primary" href="#">Tùy chọn</a>
                                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#editModal" class="open-editModal" data-id="3" data-fullname="Huỳnh Công Pháp" data-username="102120305" data-pwd="123" data-group="4" data-lock="False" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                    <li><a href="#resetModal" class="open-resetModal" data-id="3" data-toggle="modal"><i class="fa fa-refresh"></i> Reset Password</a></li>
                                    <li><a href="#banModal" class="open-banModal" data-id="3" data-toggle="modal"><i class="fa fa-lock"></i> Lock</a></li>
                                    <li><a href="#delModal" class="open-delModal" data-id="3" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>


            <div id="myModal" class="modal  fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Thêm tài khoản</h3>
                </div>
                <div class="modal-body">
                    <form action="/Admin/AddUser" class="form-custom" method="post">
                        <div class="row">
                            <div class="span6" style="text-align: center">
                                <h4 class="control-label">Thêm mới:</h4>
                            </div>
                            <div class="span3" style="text-align: center">
                                <h4 class="control-label">Thêm từ danh sách:</h4>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="span6">
                                <div class="form-group">
                                    <label class="control-label">Họ và tên:</label>
                                    <div class="controls">
                                        <input class="form-control" id="HoTen" name="HoTen" placeholder="Nhập họ tên người dùng" type="text" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span3">
                                <div class="form-group">
                                    <label class="control-label">Mã đăng nhập:</label>
                                    <div class="controls">
                                        <input class="form-control" id="MaDN" name="MaDN" placeholder="Nhập mã đăng nhập" type="text" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="span3">
                                <div class="form-group">
                                    <label class="control-label">Nhóm:</label>
                                    <select class="form-control" name="Nhom" class="span3">
                                        <option value="1">Quản trị</option>
                                        <option value="4">Giảng viên</option>
                                        <option value="5">Sinh viên</option>
                                    </select>
                                </div>
                            </div>
                            <div class="span3" style="text-align: center">
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="button" class="btn btn-facebook-alt" data-dismiss="modal" aria-hidden="true" data-toggle="modal" data-target="#addModal"><i class="fa fa-briefcase"></i> Giảng viên</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span3">
                                <div class="form-group">
                                    <label class="control-label">Mật khẩu:</label>
                                    <div class="controls">
                                        <input class="form-control" id="MatKhau" name="MatKhau" placeholder="Nhập mật khẩu" type="password">
                                    </div>
                                </div>
                            </div>
                            <div class="span3">
                                <div class="form-group">
                                    <label class="control-label">Nhập lại mật khẩu:</label>
                                    <div class="controls">
                                        <input class="form-control" id="NhapLaiMK" name="NhapLaiMK" placeholder="Nhập lại mật khẩu" type="password">
                                    </div>
                                </div>
                            </div>
                            <div class="span3" style="text-align: center">
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="button" class="btn btn-facebook-alt"><i class="fa fa-graduation-cap"></i> Sinh viên</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span6">
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">Thêm</button>
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


            <div id="editModal" class="modal-custom hide fade edit-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Sửa thông tin tài khoản</h3>
                </div>
                <form action="/Admin/EditUser" class="form-custom" method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div class="span4">
                                <div class="control-group">
                                    <label class="control-label">Mã đăng nhập:</label>
                                    <div class="controls">
                                        <input class="ID" id="ID" name="ID" type="hidden" value="">
                                        <input class="span4 MaDN" id="MaDN" name="MaDN" placeholder="Nhập mã đăng nhập" type="text" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span4">
                                <div class="control-group">
                                    <label class="control-label">Họ và tên:</label>
                                    <div class="controls">
                                        <input class="span4 HoTen" id="HoTen" name="HoTen" placeholder="Nhập họ tên người dùng" type="text" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span4">
                                <div class="control-group">
                                    <label class="control-label">Nhóm:</label>
                                    <div class="controls">
                                        <select name="Nhom" class="span4" id="Nhom">
                                            <option value="1">Quản trị</option>
                                            <option value="4">Giảng viên</option>
                                            <option value="5">Sinh viên</option>
                                        </select>
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


            <div id="delModal" class="modal-custom hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Xóa tài khoản</h3>
                </div>
                <form action="/Admin/DelUser" class="form-custom" method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div class="span4">
                                <div class="control-group">
                                    <input type="hidden" name="ID" class="ID" value="">
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


            <div id="banModal" class="modal-custom hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Khóa tài khoản người sử dụng</h3>
                </div>
                <form action="/Admin/BanUser" class="form-custom" method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div class="span4">
                                <div class="control-group">
                                    <input type="hidden" name="ID" class="ID" value="">
                                    <label class="control-label">Bạn có chắc chắn muốn khóa tài khoản này?</label>
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


            <div id="resModal" class="modal-custom hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Khôi phục tài khoản người sử dụng</h3>
                </div>
                <form action="/Admin/RestoreUser" class="form-custom" method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div class="span4">
                                <div class="control-group">
                                    <input type="hidden" name="ID" class="ID" value="">
                                    <label class="control-label">Bạn có chắc chắn muốn khôi phục tài khoản này?</label>
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


            <div id="resetModal" class="modal-custom hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Khôi phục mật khẩu</h3>
                </div>
                <form action="/Admin/ResetPass" class="form-custom" method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div class="span4">
                                <div class="control-group">
                                    <input type="hidden" name="ID" class="ID" value="">
                                    <label class="control-label">Bạn có chắc chắn muốn khôi phục mật khẩu của tài khoản này?</label>
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


            <div id="addModal" class="modal-custom hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Xóa người dùng</h3>
                </div>
                <form action="/Admin/DelUser" class="form-custom" method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div class="span4">
                                <div class="control-group">
                                    <input type="hidden" name="ID" class="ID" value="">
                                    <label class="control-label">Bạn có chắc chắn muốn xóa người dùng này?</label>
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
        </div>
    </div>
</div>
<script type="text/javascript">
    //Sửa
    $(document).on("click", ".open-editModal", function() {
        var id = $(this).data('id');
        var fn = $(this).data('fullname');
        var un = $(this).data('username');
        var p = $(this).data('pwd');
        var g = $(this).data('group');
        var l = $(this).data('lock');
        $(".edit-modal .modal-body .ID").val(id);
        $(".edit-modal .modal-body .HoTen").val(fn);
        $(".edit-modal .modal-body .MaDN").val(un);
        $(".edit-modal .modal-body .MatKhau").val(p);
        $('#Nhom option[value="' + g + '"]').prop('selected', true);
        $(".edit-modal .modal-body .Khoa").val(l);
    });

    //Xóa
    $(document).on("click", ".open-delModal", function() {
        var id = $(this).data('id');
        $(".modal-body .ID").val(id);
    });

    //Khóa
    $(document).on("click", ".open-banModal", function() {
        var id = $(this).data('id');
        $(".modal-body .ID").val(id);
    });

    //Khôi phục tk
    $(document).on("click", ".open-resModal", function() {
        var id = $(this).data('id');
        $(".modal-body .ID").val(id);
    });

    //Khôi phục tk
    $(document).on("click", ".open-resetModal", function() {
        var id = $(this).data('id');
        $(".modal-body .ID").val(id);
    });
</script>
@endif
@endsection