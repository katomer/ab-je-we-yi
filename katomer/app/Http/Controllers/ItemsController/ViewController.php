<?php

namespace App\Http\Controllers\ItemsController;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ViewController extends Controller
{
    public function all()
    {
        return view('welcome');
    }
    public function car()
    {
        return view('car');
    }
    public function computer()
    {
        return view('computer');
    }
    public function electronics()
    {
        return view('electronics');
    }
    public function house()
    {
        return view('house');
    }
    public function household()
    {
        return view('household');
    }
    public function phone()
    {
        return view('phone');
    }
    public function other()
    {
        return view('other');
    }

}
