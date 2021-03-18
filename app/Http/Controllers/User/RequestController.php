<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;
use App\Request;
use App\Notifications\Company\NewRequestNotification;
//use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index()
    {
//        $re=User::with(['requests'])->where('email', auth('web')->user()->email);
        return view('/user/dashboard/request', [
            'requests' => auth('web')->user()->requests()->latest()->get()
        ]);
    }
//    public function getRequest()
//    {
//        return view('user.options.request');
//    }
//     public function postRequest(Request $request)
//     {
//         $request->validate([
//             'to'=>'required|email',
//             'from'=>'required|email',
//             'image'=> 'file',
//             'details'=>'string|required|min:3'
//         ]);
//
//         $field=
//             $request->only(
//                 ['to','from','details']
//             );
//
//         if($request->hasFile('image')) {
//             $field['image'] = $request->file('image')->store('public/request');
//         }
//         $request = auth()->user()->requests()->create($field);
//
//         flash()->success('Request has been sent successfully.');
//         return redirect()->to('/user/dashboard/request');
//
////         $to=$request->input('to');
////         $from=$request->input('from');
////         $file=$request->file('image');
////         $details=$request->input('details');
//         //return view();
//     }
}
