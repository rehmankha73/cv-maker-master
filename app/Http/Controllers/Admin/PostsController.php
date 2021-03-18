<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\JobPost;
use App\JobSkills;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post=JobPost::with('jobskills')->latest()->get();
        return view('admin.posts.index',['posts'=>$post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
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
                'title'=>'string|required|min:3',
                'details'=>'required|string|min:3',
                'career'=>'string',
                'postions'=>'string',
                'location'=>'required|string',
                'qualifications'=>'string',
                'experiences'=>'string',
//                'job_skills'=>'array|string',
//                'job_skills.*'=>'array|string',
                'salary_from'=>'numeric|min:1',
                'salary_to'=>'numeric|min:1',
                'preferences'=>'string',
                'image'=>'image|nullable'
            ]
        );
        $title = $request->input('title');
        $details = $request->input('details');
        $career = $request->input('career');
        $positions = $request->input('positions');
        $location=$request->input('location');
        $qualifications = $request->input('qualifications');
        $experiences = $request->input('experiences');
        $salary_from = $request->input('salary_from');
        $salary_to = $request->input('salary_to');
        $preferences = $request->input('preferences');
        $fields=
            [
                'company_id'=>auth('admin')->user()->id,
                'title'=>$title,
                'image'=> $request->hasFile('image') ? $request->file('image')->store('public/company/jobpost') : null,
                'location'=>$location,
                'details'=>$details,
                'career'=>$career,
                'positions'=>$positions,
                'qualifications'=>$qualifications,
                'experiences'=>$experiences,
                'salary_from'=>$salary_from,
                'salary_to'=>$salary_to,
                'preferences'=>$preferences
            ];

        $post = JobPost::create($fields);

        $job_skills=$request->input('job_skills',[]);
        for ($i = 0; $i < sizeof($job_skills); $i++) {
            JobSkills::create([
                'jobpost_id' => $post->id,
                'job_skills'=>$job_skills[$i],
            ]);
        }

        flash()->success('Job Post Successfully');
        return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=JobPost::findorfail($id);
        return view('admin.posts.show',['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $posts=JobPost::findorfail($id);
//       dd($posts);
       return view('admin.posts.edit',['posts'=>$posts]);
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

        $request->validate(
            [
                'title'=>'string|required|min:3',
                'details'=>'required|string|min:3',
                'career'=>'string',
                'postions'=>'string',
                'location'=>'required|string',
                'qualifications'=>'string',
                'experiences'=>'string',
//                'job_skills'=>'array|string',
//                'job_skills.*'=>'array|string',
                'salary_from'=>'numeric|min:1',
                'salary_to'=>'numeric|min:1',
                'preferences'=>'string',
                'image'=>'image|nullable'
            ]
        );

        $title = $request->input('title');
        $details = $request->input('details');
        $career = $request->input('career');
        $positions = $request->input('positions');
        $location=$request->input('location');
        $qualifications = $request->input('qualifications');
        $experiences = $request->input('experiences');
        $salary_from = $request->input('salary_from');
        $salary_to = $request->input('salary_to');
        $preferences = $request->input('preferences');
        $fields=
            [
                'company_id'=>auth()->user()->id,
                'title'=>$title,
                'image'=> $request->hasFile('image') ? $request->file('image')->store('public/company/jobpost') : null,
                'location'=>$location,
                'details'=>$details,
                'career'=>$career,
                'positions'=>$positions,
                'qualifications'=>$qualifications,
                'experiences'=>$experiences,
                'salary_from'=>$salary_from,
                'salary_to'=>$salary_to,
                'preferences'=>$preferences
            ];
        $post = JobPost::findOrFail($id);
        $post->update($fields);

        $job_skills = $request->input('job_skills',[]);

        $post->jobskills()->delete();
        for ($i = 0; $i < sizeof($job_skills); $i++) {
            JobSkills::create([
                'jobpost_id' => $post->id,
                'job_skills'=>$job_skills[$i],
            ]);
        }

        flash()->success('Update');
        return redirect()->route('admin.posts.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jobpost = JobPost::findOrFail($id);
        $jobpost->delete();
        flash()->success('Deleted');
        return redirect()->route('admin.posts.index');
    }

    public function addNew()
    {
        dd('test');
    }
}
