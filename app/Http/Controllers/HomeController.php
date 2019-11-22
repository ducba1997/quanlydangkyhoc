<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        if(Auth::user()->level==1)
            return view('admin.dashboard');
        if(Auth::user()->level==3)
            return view('student.dashboard');
    }
}
