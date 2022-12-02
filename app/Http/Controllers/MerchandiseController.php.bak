<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Merchandise;

class MerchandiseController extends Controller
{
    public function index() {

        $merchandises = Merchandise::get();

        return view('merchandises.index', ['merchandises'=>$merchandises]);
    }
}
