<?php
/**
 * Created by PhpStorm.
 * User: TinSky
 * Date: 2017/6/27
 * Time: 21:13
 */

namespace App\Http\Controllers;


use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(Request $request){
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::guard('admin')->attempt($data)){
            $admin = Admin::where(['email' => $request->email])->get();
            $request->session()->put('id', $admin[0]->id);
//            var_dump($admin);
            return view("welcome",['username' => $admin[0]->username]);
        }else{
            return view('auth.logins',["error" => "the email isn't match the password"]);
        }
    }

}