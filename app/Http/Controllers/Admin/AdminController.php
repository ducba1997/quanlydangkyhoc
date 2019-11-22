<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Nganh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Model\SinhVien;
use App\Model\Teacher;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function deleteStudent(Request $req)
    {
        $username = $req->get('username');
        $sv = SinhVien::where('username', $username);
        $sv->delete();
        $u = User::where('username', $username);
        $u->delete();
        return redirect()->route('admin.student');
    }

    public function recoverpassStudent(Request $req){
        $username = $req->get('username');
        $u = User::where('username', $username)->first();
        $u->password=Hash::make($username);
        $u->save();
    }

    public function editStudent( Request $req){
        $username = $req->get('username');
        $u = User::where('username', $username)->first();
        $u->name=$req->get('name');
        $u->save();
        $sv=SinhVien::where('username',$username)->first();
        $sv->email=$req->get('email');
        $sv->dienthoai=$req->get('dienthoai');
        $sv->nganh_id=$req->get('nganh_id');
        $sv->save();
        $ta="$.toast({
            heading: 'Thông tin',
            text: 'Sửa dữ liệu thành công',
            icon: 'success',
            loader: true,
            loaderBg: 'green',
            position: 'mid-center'
        });";
        Session::flash('message',$ta);
        return redirect()->route('admin.student');
    }


    public function addStudent(Request $req)
    {
        $data = new SinhVien;
        $data->username = $req->get('username');
        $data->class = $req->get('class');
        $data->nganh_id = $req->get('nganh_id');
        $data->email = $req->get('email');
        $data->dienthoai = $req->get('dienthoai');
        $data->ghichu = $req->get('ghichu');
        $data->save();
        $user = new User;
        $user->username = $req->get('username');
        $user->name = $req->get('name');
        $user->email = $req->get('email');
        $user->password = Hash::make($req->get('password'));
        $user->level = 3;
        $user->save();
        $ng=Nganh::where('id',$data->nganh_id)->first();
        $html = '<tr>
        <td></td>
        <td>' . $user->name . '</td>
        <td>' . $user->username . '</td>
        <td>
            '.$ng->ten.'</td>
        <td style="text-align: center">
            <i class="fa fa-unlock"></i>
        </td>
        <td class="td-actions">
                            <div class="btn-group">
                                <a class="btn btn-primary" href="#">Tùy chọn</a>
                                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#editModal" class="open-editModal" data-id="'. $user->id.'" data-name="'.$user->name.'" data-username="'.$user->username.'" data-class="'.$data->class.'" data-nganh="'.$data->nganh_id.'" data-dienthoai="'.$data->dienthoai.'" data-email="'.$data->email.'" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                    <li><a href="#resetModal" class="open-resetModal" data-id="'.$user->id.'" data-toggle="modal"><i class="fa fa-refresh"></i> Reset Password</a></li>
                                    <li><a href="#delModal" class="open-delModal" data-username="'.$user->username.'" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                </ul>
                            </div>
                        </td>';
        return response($html, 201)->header('Content-Type', 'text/html');;
    }
    public function deleteTeacher(Request $req)
    {
        $username = $req->get('username');
        $sv = Teacher::where('username', $username);
        $sv->delete();
        $u = User::where('username', $username);
        $u->delete();
        return redirect()->route('admin.teacher');
    }

    public function recoverpassTeacher(Request $req){
        $username = $req->get('username');
        $u = User::where('username', $username)->first();
        $u->password=Hash::make($username);
        $u->save();
    }

    public function editTeacher( Request $req){
        $username = $req->get('username');
        $u = User::where('username', $username)->first();
        $u->name=$req->get('name');
        $u->save();
        $sv=Teacher::where('username',$username)->first();
        $sv->email=$req->get('email');
        $sv->dienthoai=$req->get('dienthoai');
        $sv->nganh_id=$req->get('nganh_id');
        $sv->save();
        $ta="$.toast({
            heading: 'Thông tin',
            text: 'Sửa dữ liệu thành công',
            icon: 'success',
            loader: true,
            loaderBg: 'green',
            position: 'mid-center'
        });";
        Session::flash('message',$ta);
        return redirect()->route('admin.teacher');
    }


    public function addTeacher(Request $req)
    {
        $data = new Teacher;
        $data->username = $req->get('username');
        $data->nganh_id = $req->get('nganh_id');
        $data->email = $req->get('email');
        $data->dienthoai = $req->get('dienthoai');
        $data->ghichu = $req->get('ghichu');
        $data->save();
        $user = new User;
        $user->username = $req->get('username');
        $user->name = $req->get('name');
        $user->email = $req->get('email');
        $user->password = Hash::make($req->get('password'));
        $user->level = 2;
        $user->save();
        $ng=Nganh::where('id',$data->nganh_id)->first();
        $html = '<tr>
        <td></td>
        <td>' . $user->name . '</td>
        <td>' . $user->username . '</td>
        <td>
            '.$ng->ten.'</td>
        <td style="text-align: center">
            <i class="fa fa-unlock"></i>
        </td>
        <td class="td-actions">
                            <div class="btn-group">
                                <a class="btn btn-primary" href="#">Tùy chọn</a>
                                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#editModal" class="open-editModal" data-id="'. $user->id.'" data-name="'.$user->name.'" data-username="'.$user->username.'" data-class="'.$data->class.'" data-nganh="'.$data->nganh_id.'" data-dienthoai="'.$data->dienthoai.'" data-email="'.$data->email.'" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                    <li><a href="#resetModal" class="open-resetModal" data-id="'.$user->id.'" data-toggle="modal"><i class="fa fa-refresh"></i> Reset Password</a></li>
                                    <li><a href="#delModal" class="open-delModal" data-username="'.$user->username.'" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                </ul>
                            </div>
                        </td>';
        return response($html, 201)->header('Content-Type', 'text/html');;
    }
}
