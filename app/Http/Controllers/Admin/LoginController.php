<?php

namespace App\Http\Controllers\Admin;

require_once 'app/Common/ValidateCode.php';
use Illuminate\Http\Request;

class LoginController extends CommonController
{
    public  function  Login()
    {
        return view('Admin.Login');
    }
    public  function  Code()
    {
        $_vc = new \ValidateCode();  //实例化一个对象
        $_vc->doimg();
        //echo  $_vc->getCode();
        $_SESSION['authnum_session'] = $_vc->getCode();
    }
    public  function  GetCode()
    {
        $_vc = new \ValidateCode();  //实例化一个对象
        echo $_vc->getCode();
    }
}
