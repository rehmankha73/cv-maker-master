<?php

namespace App\Http\Controllers\User;

use App\Testimonials;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimonialsController extends Controller
{
    /*
     * Show Testimonials Form.
     */
    public function get(Request $request)
    {
        return view('user.testimonial');
    }

    /*
     * Save Testimonials Form Data.
     */
    public function post(Request $request)
    {
        $request->validate([
            'status' => 'required|boolean',
            'message' => 'required|min:3'
        ]);

        Testimonials::create([
            'user_id' => auth()->id(),
            'status' => $request->input('status'),
            'message' => $request->input('message'),
        ]);

        flash()->success('Testimonial Saved Successfully.');
        return redirect('user/dashboard/testimonial');
    }
}
