<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
//        dd($users);
        return view('admin.users.index',
        [
            'users'=>$users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users=User::findorfail($id);
        return view('admin.users.edit',
        [
            'user'=>$users
        ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user=User::findorfail($id);
        $request->validate([
            'first_name' => 'required|string|min:3',
            'last_name'=> 'string|min:3|nullable',
            'about'=>'string|nullable',
            'father_name'=>'string|min:3|max:255',
            'email'=>'email|required',
            'phone'=>'required|string',
            'address'=>'string',
            'country'=>'string|nullable',
            'city'=>'string|nullable',
            'code'=>'string|numeric',
            'image' => 'image|required'
        ]);

        $fields = $request->only([
            'first_name', 'last_name', 'about', 'father_name', 'email', 'phone', 'address', 'country', 'city', 'code',
        ]);

        if($request->hasFile('image'))
            $fields['profile_image'] = $request->file('image')->store('public/user/profile');

        $user->update($fields);

        flash()->success('User Data updated successfully.');
        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        dd($id);
        $user= User::findOrFail($id);
        $user->delete();

        flash()->success('Deleted');
        return redirect()->route('admin.users.index');

    }
}
