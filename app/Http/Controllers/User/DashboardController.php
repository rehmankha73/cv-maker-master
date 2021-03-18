<?php

namespace App\Http\Controllers\User;

use App\Company;
use App\JobPost;
use App\User;
use App\Data;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return mixed
     */
    public function index()
    {
//        $company = Company::whereRaw('id = (select max(`id`) from companies)')->get();
//        $company = Company::find(\DB::table('companies')->max('id'));
        $max_jobspost=JobPost::max('id');
        $max_company=Company::max('id');
        $max_user=User::max('id');

        return view('user.dashboard',['company'=>$max_company,'posts'=>$max_jobspost,'user'=>$max_user]);
    }


    public function getSupport()
    {
        return view('user.options.support');
    }

    public function getContact()
    {
        return view('user.dashboard.contact');
    }
    public function postContact(Request $request)
    {
        $request->validate([
            'subject' => 'required|string',
            'message' => 'required|string|min:3'
        ]);
//        $request->input('subject');
//        $request->input('message');
        $fields=$request->only(
            [
                'subject','message'
            ]
        );

        auth('web')->user()->contacts()->create($fields);

        flash()->success('Successfully Send to Admin !');
        return redirect()->to('/user/dashboard/contact');
    }
}
