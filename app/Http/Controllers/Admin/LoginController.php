<?php

namespace App\Http\Controllers\Admin;

require_once 'app/Common/ValidateCode.php';
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class LoginController extends CommonController
{
    public  function  Login()
    {
        IF ($input = Input::all()) {
            IF (strtolower($input['user_code']) != $_SESSION['Login_Code']) {
                return back()->with('msg','验证码错误');
            }
            echo 'OK';
        } ELSE {
            return view('Admin.Login');
        }
    }
    public  function  Code()
    {
        $_vc = new \ValidateCode();  //实例化一个对象
        $_vc->GoCode();
        //echo  $_vc->getCode();
        $_SESSION['Login_Code'] = $_vc->GetCode();
    }
}
