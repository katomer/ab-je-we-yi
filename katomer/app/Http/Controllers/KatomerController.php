<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class KatomerController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('welcome');
    }
}
