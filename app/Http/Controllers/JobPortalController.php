<?php

namespace App\Http\Controllers;
use App\JobPost;
use App\Http\Controllers\Company\JobPostController;
use App\Notifications\Company\NewRequestNotification;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class JobPortalController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['edit', 'update']);
    }

    public function index()
    {
        $posts = JobPost::latest()->with(['jobskills'])->paginate();
        return view('jobs.index', [
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        $post = JobPost::with(['jobskills', 'company'])->findorfail($id);

        return view('jobs.show', [
            'post' => $post
        ]);
    }

    /**
     * Apply Form for job
     *
     * @param $id
     */
    public function edit($id)
    {
        $post = JobPost::findorfail($id);

        return view('jobs.edit', [
            'post' => $post
        ]);
    }

    /**
     * Submit Apply Form for job
     *
     * @param $id
     */
    public function update(Request $request, $id)
    {
        $post = JobPost::with('requests')->findorfail($id);

        $hasAlreadyApplied = !is_null(auth('web')->user()->requests()->where('jobpost_id', $post->id)->first());

        if($hasAlreadyApplied)
        {
            flash()->error('Already applied!');
            return redirect()->route('jobs.show', [$post->id]);
        }

        $request = $post->requests()->create([
            'user_id' => auth('web')->id(),
            'details' => $request->input('details'),
            'image'=> $request->hasFile('image') ? $request->file('image')->store('public/user/jobpost') : null,
        ]);

        $post->company->notify(new NewRequestNotification($request));

//        $post->requests()->get(); // returns requests for $post
//        JobPost::with(['requests'])->get(); // returns posts

        flash()->success('Requested successfully');
        return redirect()->route('jobs.show', [$post->id]);
    }

    public function FindByQualification($num)
    {
        if ($num == 1) {
            $post = JobPost::latest()->with(['jobskills'])->where('qualifications', 'Non-Matriculation')->paginate();
            return view('jobs.index', [
                'posts' => $post]);
        }
        else if ($num == 2) {
            $post = JobPost::latest()->with(['jobskills'])->where('qualifications', 'Matriculation/O-Level')->paginate();
            return view('jobs.index', [
                'posts' => $post]);
        }
        else if ($num == 3) {
            $post = JobPost::latest()->with(['jobskills'])->where('qualifications', 'Intermediate/A-Level')->paginate();
            return view('jobs.index', [
                'posts' => $post]);
        }
        else if ($num == 4) {
            $post = JobPost::latest()->with(['jobskills'])->where('qualifications', 'Bachelor')->paginate();
            return view('jobs.index', [
                'posts' => $post]);
        }
        else if ($num == 5) {
            $post = JobPost::latest()->with(['jobskills'])->where('qualifications', 'Master')->paginate();
            return view('jobs.index', [
                'posts' => $post]);
        }
        else if ($num == 6) {
            $post = JobPost::latest()->with(['jobskills'])->where('qualifications', 'MBBS/BDS')->paginate();
            return view('jobs.index', [
                'posts' => $post]);
        }
        else if ($num == 7) {
            $post = JobPost::latest()->with(['jobskills'])->where('qualifications', 'Pharm-D')->paginate();
            return view('jobs.index', [
                'posts' => $post]);
        }
        else if ($num == 8) {
            $post = JobPost::latest()->with(['jobskills'])->where('qualifications', 'M-Phill')->paginate();
            return view('jobs.index', [
                'posts' => $post]);
        }
        else if ($num == 9) {
            $post = JobPost::latest()->with(['jobskills'])->where('qualifications', 'PHD/Doctorate')->paginate();
            return view('jobs.index', [
                'posts' => $post]);
        }
        else if ($num == 10) {
            $post = JobPost::latest()->with(['jobskills'])->where('qualifications', 'Certification')->paginate();
            return view('jobs.index', [
                'posts' => $post]);
        }
        else if ($num == 11) {
            $post = JobPost::latest()->with(['jobskills'])->where('qualifications', 'Diploma')->paginate();
            return view('jobs.index', [
                'posts' => $post]);
        }
        else{
            $post = JobPost::latest()->with(['jobskills'])->where('qualifications', 'Short Course')->paginate();
            return view('jobs.index', [
                'posts' => $post]);
        }

    }

    public function FindBySkill(Request $request)
    {
       $skill= $request->input('skill');
//        $post = JobPost::with(['jobskills'])->where('job_skills', $skill)->paginate();
//        $post=JobPost::with('jobskills', function($query) use ($skills) {
//        $query->where('jobskills', $skills);
//         })->paginate();
        $post=JobPost::whereHas('jobskills', function (Builder $query) use ($skill) {
            $query->where('job_skills', 'like', '%'.  $skill . '%');
        })->paginate();

        return view('jobs.index', [
            'posts' => $post]);
    }

    public function FindByLocation(Request $request)
    {
       $location= $request->input('location');
        $post = JobPost::latest()->with(['jobskills'])->where('location', $location)->paginate();
        return view('jobs.index', [
            'posts' => $post]);
    }
}
