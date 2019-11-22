<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Model\PhieuDangKy;
use App\Model\SinhVien;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    public function register($id){
        $data= new PhieuDangKy;
        $sv=SinhVien::where('username',Auth::user()->username)->first();
        $data->sinhvien_id=$sv->id;
        $data->lophocphan_id=$id;
        $check=PhieuDangKy::where('sinhvien_id',$sv->id)->where('lophocphan_id',$id)->first();
        if($check){
            $ta="$.toast({
                heading: 'Thông tin',
                text: 'Môn học này bạn đã đăng ký từ trước đó',
                icon: 'error',
                loader: true,
                loaderBg: 'green',
                position: 'mid-center'
            });";
            Session::flash('message',$ta);
            return redirect()->route('student.registerg');
        }
        $data->nguoidangky=Auth::user()->name;
        $data->save();
        $ta="$.toast({
            heading: 'Thông tin',
            text: 'Đăng ký môn học thành công, mời xem kết quả phía dưới',
            icon: 'success',
            loader: true,
            loaderBg: 'green',
            position: 'mid-center'
        });";
        Session::flash('message',$ta);
        return redirect()->route('student.registerg');
    }
    public function cancel($id){
        $data=  PhieuDangKy::where('id',$id);
        $data->delete();
        $ta="$.toast({
            heading: 'Thông tin',
            text: 'Hủy môn học thành công',
            icon: 'success',
            loader: true,
            loaderBg: 'green',
            position: 'mid-center'
        });";
        Session::flash('message',$ta);
        return redirect()->route('student.register');;
    }
}
