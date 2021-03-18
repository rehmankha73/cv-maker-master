<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Data;
use App\Experience;
use App\Hobbies;
use App\Http\Requests\User\CVDataRequest;
use App\Qualification;
use App\Reference;
use App\Skills;
use App\Languages;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index()
    {
        return view('user.cv.index', [
            'user' => auth()->user(),
            'cv' => auth()->user()->data()->with([])->first(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return mixed
     */
    public function create()
    {
        return view('user.cv.create', [
            'user' => auth()->user(),
            'cv' => auth()->user()->data()->with([
                'qualifications', 'experiences', 'skills', 'languages', 'hobbies', 'references'
            ])->first(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CVDataRequest $request
     * @return Response
     */
    public function store(CVDataRequest $request)
    {
        $data = auth()->user()->data()->first();

        if(is_null($data))
            $data = auth()->user()->data()->create($request->only([
                'name', 'fathername', 'biography', 'position', 'date', 'address', 'email', 'number', 'facebook', 'linkedin', 'twitter'
            ]));
        else
            $data->update($request->only([
                'name', 'fathername', 'biography', 'position', 'date', 'address', 'email', 'number', 'facebook', 'linkedin', 'twitter'
            ]));

        if ($request->hasfile('image'))
            $data->update(['image' => $request->file('image')->store('public/cvs')]);

        $data->qualifications()->delete();
        $data->experiences()->delete();
        $data->skills()->delete();
        $data->languages()->delete();
        $data->hobbies()->delete();
        $data->references()->delete();

        $degree = $request->input('degree', []);
        $insitude = $request->input('insitude', []);
        $session = $request->input('session', []);
        $marks = $request->input('marks', []);
        $total = $request->input('total', []);
        $Q_des = $request->input('Q_des', []);
        for ($i = 0; $i < sizeof($degree); $i++) {
            $data->qualifications()->create([
                'degree' => $degree[$i],
                'insitude' => $insitude[$i],
                'session' => $session[$i],
                'marks' => $marks[$i],
                'total' => $total[$i],
                'Q_des' => $Q_des[$i]
            ]);
        }
        $companies = $request->input('companies', []);
        $posts = $request->input('posts', []);
        $join_date = $request->input('join_date', []);
        $leave_date = $request->input('leave_date', []);
        $E_des = $request->input('E_des', []);
        for ($i = 0; $i < sizeof($companies); $i++) {
            Experience::create(
                [
                    'data_id' => $data->id,
                    'companies' => $companies[$i],
                    'posts' => $posts[$i],
                    'join_date' => $join_date[$i],
                    'leave_date' => $leave_date[$i],
                    'E_des' => $E_des[$i]
                ]
            );
        }

        $skills = $request->input('skills', []);
        $skills_level = $request->input('skills_level', []);
        for ($i = 0; $i < sizeof($skills); $i++) {
            Skills::create([
                'data_id' => $data->id, 'skills' => $skills[$i], 'skills_level' => $skills_level[$i]
            ]);
        }

        $languages = $request->input('languages', []);
        $languages_level = $request->input('languages_level', []);
        for ($i = 0; $i < sizeof($languages); $i++) {
            Languages::create([
                'data_id' => $data->id,
                'languages' => $languages[$i], 'languages_level' => $languages_level[$i]
            ]);
        }

        $hobbies = $request->input('hobbies', []);
        for ($i = 0; $i < sizeof($hobbies); $i++) {
            Hobbies::create(
                [
                    'data_id' => $data->id,
                    'hobbies' => $hobbies[$i]
                ]
            );
        }

        $references = $request->input('references', []);
        $refphone = $request->input('refphone', []);
        $refaddress = $request->input('refaddress', []);
        for ($i = 0; $i < sizeof($references); $i++) {
            Reference::create(
                [
                    'data_id' => $data->id,
                    'references' => $references[$i],
                    'refphone' => $refphone[$i],
                    'refaddress' => $refaddress[$i]
                ]
            );
        }

        flash()->success('CV Data saved successfully.');
        return redirect('user/cv');
    }

    public function template($type, $user)
    {
//        if( !($type > 0 && $type < 10) )
//            abort(404);

        $data = User::findOrFail($user)->data()->firstOrFail();

        return view('user.cv.templates.cv'.$type, [
            'data' => $data,
            'qualification' => $data->qualifications()->get(),
            'experience' => $data->experiences()->get(),
            'skills' => $data->skills()->get(),
            'languages' => $data->languages()->get(),
            'hobbies' => $data->hobbies()->get(),
            'reference' => $data->references()->get()
        ]);
    }

    public function downloadPdf($type)
    {
        return \PDF::loadFile(url('cv/pdf/'.$type.'/'. auth()->id() . '?print=1'))->inline('cv-'.$type.'.pdf');
    }
}
