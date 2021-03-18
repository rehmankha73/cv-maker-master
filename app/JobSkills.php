<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSkills extends Model
{
    protected $fillable = [
        'jobpost_id', 'job_skills'
    ];

    public function jobpost()
    {
        return $this->belongsTo(JobPost::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
