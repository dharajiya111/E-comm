<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function login(Request $req)
    {
      //  return $req->input();

        $user =User::where(['email'=>$req->email,'password'=>$req->password])->first();



        if(!$user)
        {
            return "Email And Password Not Match";
        }
        else
        {
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
    function Register(Request $req)
    {
       // return $req->input();
        $user = new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=$req->password;
        $user->save();

        return redirect("/login");


    }
}
