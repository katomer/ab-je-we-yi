<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class KatomerController extends Controller
{
    public function index()
    {
        $a_user = User::find(1);
        //return $a_user;
        return view('katomer')->with('user',$a_user);
    }
}
