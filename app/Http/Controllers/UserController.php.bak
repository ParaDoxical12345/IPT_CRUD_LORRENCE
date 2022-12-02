<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){

        $myUser = User::orderBy('lname')->get();

        return view('Users.user', ['users'=>$myUser]);
    }
}
