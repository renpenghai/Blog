<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class LoginController extends CommonController
{
    public  function  Login()
    {
        return view('Admin.Login');
    }
}
