<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index() {
    	return view('Admin.homepage.home');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    public function admintable() {
        return view('Admin.homepage.admintable');
    }
}
