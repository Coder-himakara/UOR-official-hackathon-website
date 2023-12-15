<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hackathonController extends Controller
{
    public function index(){
        return view('index');
    }
    public function contactUs(){
        return view('contactUs');
    }
    public function updates(){
        return view('updates');
    }
}
