<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Session;
class hlcontroller extends Controller
{
    public function __construct()
    {

        $this->middleware('sentinel');
        $this->middleware('sentinel.role');
   
    }
    public function index()
    {
     return view('halamanutamalogin');
    }

 
}
