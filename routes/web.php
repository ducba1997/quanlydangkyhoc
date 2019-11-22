<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;

Route::get('/',['as'=>'home','uses'=>'HomeController@index']);
Route::get('/home','HomeController@index');

Route::group(['middleware'=>'auth','prefix'=>'/student'],function (){
    Route::get('/register',function (){
        return view('student.registerexam');
    })->name('student.registerg');
    Route::get('/dashboard',function (){
        return view('student.dashboard');
    })->name('student.dashboard');
    Route::post('/register/{id}',['as'=>'student.register','uses'=>'Student\StudentController@register']);

    Route::post('/cancel/{id}',['as'=>'student.cancel','uses'=>'Student\StudentController@cancel']);
});

Route::group(['middleware'=>'auth','prefix'=>'/admin'],function (){
    Route::get('/',function (){
        if(Auth::user()->level==1){
            return view('admin.dashboard');
        }
    })->name('admin.dashboard');
    Route::get('/student',function (){
        return view('admin.studentmanage');
    })->name('admin.student');
    Route::get('/teacher',function (){
        return view('admin.teachermanage');
    })->name('admin.teacher');
    Route::get('/notification',function (){
        return view('admin.notifimanage');
    })->name('admin.notification');
    Route::get('/registerexam',function (){
        return view('admin.registerexam');
    })->name('admin.registerexam');

    Route::post('/addstudent',['as'=>'admin.addstudent','uses'=>'Admin\AdminController@addStudent']);

    Route::post('/deletestudent',['as'=>'admin.deletestudent','uses'=>'Admin\AdminController@deleteStudent']);

    Route::post('/recoverpassstudent',['as'=>'admin.recoverpassstudent','uses'=>'Admin\AdminController@recoverpassStudent']);
    
    Route::post('/editstudent',['as'=>'admin.editstudent','uses'=>'Admin\AdminController@editStudent']);

    Route::post('/addteacher',['as'=>'admin.addteacher','uses'=>'Admin\AdminController@addTeacher']);

    Route::post('/deleteteacher',['as'=>'admin.deleteteacher','uses'=>'Admin\AdminController@deleteTeacher']);

    Route::post('/recoverpassteacher',['as'=>'admin.recoverpassteacher','uses'=>'Admin\AdminController@recoverpassTeacher']);
    
    Route::post('/editteacher',['as'=>'admin.editteacher','uses'=>'Admin\AdminController@editTeacher']);

});

Route::get('/login',['as'=>'login', 'uses' => 'Auth\LoginController@getLogin']);
Route::post('/login',['as'=>'login','uses'=>'Auth\LoginController@postLogin']);

Route::post('logout',['as'=>'logout','uses'=>'Auth\LogoutController@postLogout']);