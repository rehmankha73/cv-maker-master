<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin=Admin::all();
        return view('admin.settings.index',['admin'=>$admin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'first_name'=>'string|required|min:3',
                'last_name'=>'string|nullable|min:3',
                'email'=>'required|email',
                'dob'=>'date|required',
                'gemder'=>'string'
            ]);

        $fields=
            [
                'firstname'=>$request->input('first_name'),
                'sirname'=>$request->input('last_name'),
                'email'=>$request->input('email'),
                'password'=>Hash::make($request->input('password')),
                'dob'=>$request->input('dob'),
                'gender'=>$request->input('gender'),
            ];
        Admin::create($fields);

        flash()->success('New Admin Created Successfully !');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.settings.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|max:255|confirmed'
        ]);

        $current_password = $request->input('current_password');
        $new_password = $request->input('new_password');
        $user = auth('admin')->user();

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



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin=Admin::findorfail($id);
        $admin->delete();

        flash()->success('Deleted Successfully');
        return redirect()->route('admin.settings.index');
    }
}
