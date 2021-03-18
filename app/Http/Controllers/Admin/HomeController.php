<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return redirect()->to(route('admin.login'));
//        return view('admin.auth.login', ['is_homepage' => true]);
    }
}
