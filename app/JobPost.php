<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    protected $fillable = [
        'company_id','title','image','details','location','career','positions','qualifications','experiences','salary_from','salary_to','preferences'
    ];

    public function jobskills()
    {
        return $this->hasMany(JobSkills::class, 'jobpost_id');
    }

     public function company()
     {
         return $this->belongsTo(Company::class);
     }

    public function requests()
    {
        return $this->hasMany(Request::class, 'jobpost_id');
    }
}
