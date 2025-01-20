<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect(){
        return view("home.userpage");

    }
    public function index(){
        if(Auth::id()){
            $usertype=Auth()->user()->usertype;
            if($usertype=="user"){
                return view("home.userpage");
                
            }
            else {
                return view("home.userpage");
            }
        }

    }
}
