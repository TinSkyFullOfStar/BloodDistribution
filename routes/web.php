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
//主页 url : /BloodDistribution/public
Route::get('/', function () {
    return view('welcome');
});

//用户查询 url : /BloodDistribution/public/check
Route::match(['get','post'],"check", 'Blood\ActivityController@getAll');

//管理员登录 url : /BloodDistribution/public/logins
Route::get('logins',function (){
    return view('auth.logins');
});

//用户登录 url : /BloodDistribution/public/loginn
Route::get('loginn',function (){
    return view('auth.login');
});

//用户登出 url : /BloodDistribution/public/logout1
Route::get('logout1' ,'Blood\BloodController@logout');



//测试 url : /BloodDistribution/public/testPost
Route::get('testPost',function (){
    return view('blood.testPost');
});

//验证码返回 url : /BloodDistribution/public/checkCode
Route::get('checkCode',function (\Illuminate\Http\Request $request){
    $checkCode = new \App\Utils\CheckCode();
    $checkCode->createCheckCode();
    $checkCode->setSession($request);
});




//
Route::group(['middleware'=>'admin'],function (){
    //admin注册页面 url : /BloodDistribution/public/add
    Route::get('add',function (){
        return view('auth.registers');
    });

    //提交管理员注册 url : /BloodDistribution/public/postRegister
    Route::post('postRegister','AdminController@register');

});

//提交管理员登录 url : /BloodDistribution/public/postLogins
Route::post('postLogins','AdminController@login');

//用户登录
Auth::routes();

//主页面 url : /BloodDistribution/public/home
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'],function (){
    //发布页面 url : /BloodDistribution/public/apply
    Route::get('apply',function (){
        return view('apply.apply',['error'=>'申请不成功']);
    });

    //提交申请 url : /BloodDistribution/public/publish
    Route::post('publish','Blood\BloodController@insert');

    //删除信息
    Route::post('delete','Blood\BloodController@delete');

    //管理查询 url : /BloodDistribution/public/manager
    Route::match(['get','post'],"manager", 'Blood\BloodController@getAll');

    //项目主页 url : /BloodDistribution/public/text
    Route::get('text',function (){
        return view('index.main');
    });
});
