<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('admin.index');
        #return view('layouts.list.sidebar');
    }
}
