<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Request;
use Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function getLogin()
    {
        return view('login');
    }

    public function postLogin(Request $req)
    {
        $this->validate(
            $req,
            [
                'username'        =>     'required',
                'password' => 'required'
            ],
            [
                'username.required'      => 'Bạn chưa nhập tên đề tài',
                'password'      => 'Bạn chưa nhập mật khẩu'
            ]
        );
        if (Auth::attempt(['username'=>$req->input('username'),'password'=>$req->input('password')])) {
            return "success";
        } else {
            Session::flash('error', 'Username hoặc mật khẩu không đúng');
            return "fail";
        }
    }
}
