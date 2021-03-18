<?php

namespace App\Http\Controllers;

use App\Testimonials;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
         * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
//        $test=auth('web')->user()->testimonials;
//        $test=Testimonials::with(['user','company'])->get();
//        $test=Testimonials::with('company')->get();
        $test=Testimonials::whereHas('user')->with(['user'])->get();
//        dd($test);

        return view('home', ['is_homepage' => true,'test' => $test]);
    }
}
