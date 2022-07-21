<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    function Index()
    {
        Session::put ('score',0);
        return view('index');
    }

    function final()
    {
        return view('final');
    }

    function login()
    {
        return view('login');
    }

    function login_check(Request $request)
    {
        $username = $request['username'];
        $password = $request['password'];

        if ($username == 'admin'&&$password=='admin')
        {
            $message='You have successfully logged in to the Admin Panel';
            return view('admin',with(['message'=>$message]));
        }
        else
        {
            $message='Incorrect username and password.! (Please try again)';
            return view('login',with(['message'=>$message]));
        }
    }

    function insert()
    {
        return view('insert');
    }
}
