<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class SettingsController extends Controller
{
    public function getProfile()
    {
        return view('user.dashboard.profile', [
            'user' => auth()->user()
        ]);
    }

    public function postProfile(Request $request)
    {
        $request->validate([
            'first_name' => 'required|min:3',
            'last_name'=> 'min:3',
            'about'=>'string|nullable',
            'father_name'=>'string|min:3|required',
            'email'=>'email|required',
            'phone'=>'required|string',
            'address'=>'string|nullable',
            'country'=>'string|nullable',
            'city'=>'string|nullable',
            'code'=>'string|numeric|nullable',
            'image' => 'image|required'
        ]);

        $fields = $request->only([
            'first_name', 'last_name', 'about', 'father_name', 'email', 'phone', 'address', 'country', 'city', 'code',
        ]);

        if($request->hasFile('image'))
            $fields['profile_image'] = $request->file('image')->store('public/user/profile');

        auth('web')->user()->update($fields);

        flash()->success('User Data updated successfully.');
        return redirect()->to('/user/dashboard/profile');
    }

    public function getSetting()
    {
        return view('user.dashboard.setting', ['user'=>auth()->user()]);
    }

    public function postSetting(Request $request)
    {
//        $fields = $request->only([
//            'first_name', 'last_name', 'about', 'father_name', 'email', 'phone', 'address', 'country', 'city', 'code',
//        ]);
//        $fields['password'] = Hash::make( $request->input('password') );


        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|max:255|confirmed'
        ]);

        $current_password = $request->input('current_password');
        $new_password = $request->input('new_password');
        $user = auth('web')->user();

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
