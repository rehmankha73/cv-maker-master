<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\JobPost;
use App\Notifications\User\RequestApprovalNotification;
use App\Request;
//use Illuminate\Http\Request;

class JobPostRequestController extends Controller
{
    public function index($jobpost_id)
    {
        $post = auth('company')->user()->jobposts()->with(['requests'])->findorfail($jobpost_id);

        return view('company.jobposts.requests.index', [
            'post' => $post
        ]);
    }

    public function show($post_id,$request_id)
    {
        $post = auth('company')->user()->jobposts()->with(['requests'])->findorfail($post_id);
        $request= $post->requests()->findorfail($request_id);
        return view('company.jobposts.requests.show', ['request' => $request]);
    }

    public function approveRequest($post_id, $request_id)
    {
        $post = auth('company')->user()->jobposts()->with(['requests'])->findorfail($post_id);
        $request = $post->requests()->with('user')->findorfail($request_id);

        if($request->approve())
        {
            if (!is_null($request->user))
                $request->user->notify(new RequestApprovalNotification($request));
            flash()->success('Approved!');
        }
        else
            flash()->success('Couldn\'t Approve!');

        return redirect()->back();
    }


    public function disapproveRequest($post_id, $request_id)
    {
        $post = auth('company')->user()->jobposts()->with(['requests'])->findorfail($post_id);
        $request= $post->requests()->findorfail($request_id);

        if($request->disapprove())
            flash()->success('Disapproved!');
        else
            flash()->success('Couldn\'t Disapprove!');

        return redirect()->back();
    }
}
