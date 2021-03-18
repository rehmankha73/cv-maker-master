<?php

namespace App\Http\Requests\User;

use App\Rules\Phone;
use Illuminate\Foundation\Http\FormRequest;

class CVDataRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check() ;//&& auth()->user()->hasVerifiedEmail();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>  'required|string|min:3|max:50',
            'fathername'=>'required|string|min:3|max:50',
            'biography'=>'string|nullable|max:500',
            'image'=>'image|required|max:2048',
            'position'=>'string|nullable',
            'date'=>'required|date',
            'address'=>'required|string',
            'email'=>'required|email',
            'number'=>['required', new Phone()],
            'facebook'=>'string|url',
            'twitter'=>'string|url',
            'linkedin'=>'string|url',

            'degree' => 'required|array',
            'degree.*' => 'string',  //['string', 'max:50']
            'insitude' => 'array|required',
            'insitude.*' => 'string',
            'session' => 'array|required',
            'session.*' => 'string',
            'marks' => 'array|required',
            'marks.*' => 'numeric',
            'total' => 'array|required',
            'total.*' => 'numeric',
            'Q_des'=>'array|required',
            'Q_des.*'=>'string',

            'companies'=>'required|array',
            'companies.*'=>'string',
            'posts'=>'required|array',
            'posts.*'=>'string',
            'join_date' => 'required|array',
            'join_date.*' => 'date',  //['string', 'max:50']
            'leave_date' => 'array|required',
            'leave_date.*' => 'date',
            'E_des' => 'array|required',
            'E_des.*' => 'string',

            'skills'=>'array',
            'skills.*'=>'string',
            'skills_level'=>'array',
            'skills_level.*'=>'numeric|min:0|max:100',

            'languages'=>'array',
            'languages.*'=>'string',
            'languages_level'=>'array',
            'languages_level.*'=>'numeric|min:0|max:100',

            'hobbies'=>'array',
            'hobbies.*'=>'string',

            'references'=>'array',
            'references.*'=>'string',
            'refphone'=>'array',
            'refphone.*'=> [new Phone()],
            'refaddress'=>'array',
            'refaddress.*'=>'email',
        ];
    }
}
