<?php

namespace App\Http\Controllers\Admin;

use App\Company;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $company=Company::all();
      return view('admin.companies.index',['company'=>$company]);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $company=Company::findorfail($id);
      return view('admin.companies.edit',['company'=>$company]);
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
        $company=Company::findorfail($id);
        $request->validate(
            [
                'name'=>'required|min:3|string',
                'tagline'=>'string|min:3',
                'about'=>'string|nullable',
                'email'=>'required|email',
                'phone'=>'string|numeric',
                'address'=>'string',
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

        $company->update($fields);

        flash()->success('Company Profile has been Updated');
        return redirect()->route('admin.companies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company= Company::findOrFail($id);
        $company->delete();

        flash()->success('Deleted');
        return redirect()->route('admin.companies.index');
    }
}
