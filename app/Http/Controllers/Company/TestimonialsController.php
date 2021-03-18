<?php

namespace App\Http\Controllers\Company;

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
        return view('company.testimonial.testimonial');
    }

    /*
     * Save Testimonials Form Data.
     */
    public function post(Request $request)
    {
        $request->validate([
            'status' => 'required|boolean',
            'message' => 'required|string|min:3'
        ]);

        Testimonials::create([
            'company_id' => auth('company')->id(),
            'status' => $request->input('status'),
            'message' => $request->input('message')

        ]);

        flash()->success('Testimonial Saved Successfully.');
        return redirect('/company/dashboard/testimonial');
    }
}
