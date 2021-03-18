<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Testimonials;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $test=Testimonials::whereHas('company')->with(['company'])->get();
        return view('company.home', ['is_homepage' => true,'test' => $test]);
    }
}
