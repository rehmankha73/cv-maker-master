<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable=
        [
            'user_id', 'jobpost_id','image','details', 'is_approved'
        ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jobpost()
    {
        return $this->belongsTo(JobPost::class, 'jobpost_id');
    }

    public function approve()
    {
        if(auth('company')->check() && auth('company')->id() == $this->jobpost->company_id)
            return $this->update(['is_approved' => true]);
        else
            return false;
    }

    public function disapprove()
    {
        if(auth('company')->check() && auth('company')->id() == $this->jobpost->company_id)
            return $this->update(['is_approved' => false]);
        else
            return false;
    }
}
