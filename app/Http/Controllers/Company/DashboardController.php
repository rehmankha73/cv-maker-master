<?php

namespace App\Http\Controllers\Company;

use App\Company;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\JobPost;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Ramsey\Uuid\Guid\Fields;
use App\User;
//use App\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user=User::max('id');
        $post=JobPost::max('id');
        $req=\App\Request::max('id');
        return view('company.dashboard',['user'=>$user,'posts'=>$post,'req'=>$req]);
    }


    public function getProfile()
    {
        return view('company.dashboard.companyprofile');
    }

    public function postProfile(Request $request)
    {
        $request->validate(
            [
                'name'=>'required|min:3|string',
                'tagline'=>'string',
                'about'=>'string|nullable',
                'email'=>'required|email',
                'phone'=>'string|max:11',
                'address'=>'string|nullable',
                'image'=>'required|file|image'
            ]
        );

        $fields = $request->only(
            [
                'name', 'tagline', 'about', 'email', 'phone', 'address'
            ]
        );
        if ($request->hasfile('image')) {
            $fields['image'] = $request->file('image')->store('public/company/profile');
        }

        auth('company')->user()->update($fields);

        flash()->success('Company Profile has been Updated');
        return redirect()->to('/company/dashboard/profile');

    }

    public function getContact()
    {
        return view('company.dashboard.contact');
    }

    public function postContact(Request $request)
    {
        $request->validate(
            [
                'subject'=>'required|string|min:3',
                'message'=>'required|string|min:3'
            ]
        );
        $fields=$request->only(
            [
                'subject','message'
            ]
        );

        auth('company')->user()->contacts()->create($fields);

        flash()->success('Successfully Send to Admin !');
        return redirect()->to('/company/dashboard/contact');
    }

    public function getSetting()
    {
        return view('company.dashboard.setting');
    }
     public function postSetting(Request $request)
     {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|max:255|confirmed'
        ]);

        $current_password = $request->input('current_password');
        $new_password = $request->input('new_password');
        $user = auth('company')->user();

        if(!Hash::check($current_password, $user->getAuthPassword()))
        {
            throw ValidationException::withMessages([
                'current_password' => 'These credentials not match out system!'
            ]);

        }

         $user->update([
             'password' => Hash::make($new_password)
         ]);

        flash()->success('Password Updated Successfully!');
        return redirect()->back();
     }
}

