<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\JobPost;
use App\JobSkills;
use Illuminate\Http\Request;

class JobPostController extends Controller
{
    public function index()
    {
        return view('company.jobposts.index', [
            'jobpost' => auth('company')->user()->jobposts()->latest()->get()
        ]);
    }

    public function create()
    {
        return view('company.jobposts.create');
    }

    public function store(Request $request)
    {

        $post = JobPost::create($this->getFields($request));
        $job_skills=$request->input('job_skills',[]);
        for ($i = 0; $i < sizeof($job_skills); $i++) {
            JobSkills::create([
                'jobpost_id' => $post->id,
                'job_skills'=>$job_skills[$i],
            ]);
        }

        flash()->success('Job Post Successfully');
        return redirect()->route('company.jobpost.index');
    }

    public function edit($id)
    {
        $posts = auth('company')->user()->jobposts()->findOrFail($id);
        return view('company.jobposts.edit', [
            'posts' => $posts
        ]);
    }

    public function update($id,Request $request)
    {
        $post = auth('company')->user()->jobposts()->findOrFail($id);
        $post->update($this->getFields($request));

        $job_skills = $request->input('job_skills',[]);

        $post->jobskills()->delete();
        for ($i = 0; $i < sizeof($job_skills); $i++) {
            JobSkills::create([
                'jobpost_id' => $post->id,
                'job_skills'=>$job_skills[$i],
            ]);
        }

        flash()->success('Update');
        return redirect()->route('company.jobpost.index');
    }

    public function destroy($id)
    {
        $jobpost = auth('company')->user()->jobposts()->findOrFail($id);
        $jobpost->delete();

        flash()->success('Deleted');
        return redirect()->route('company.jobpost.index');
    }

    private function getFields($request)
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

        return [
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
    }
}
