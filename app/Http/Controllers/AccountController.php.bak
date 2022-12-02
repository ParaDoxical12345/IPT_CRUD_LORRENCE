<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accounts;

class AccountController extends Controller
{
    public function index(){

        $myAccount = Accounts::orderBy('acc_name')->get();

        return view('Accounts.account', ['accounts'=>$myAccount]);
    }
}
