<?php

namespace App;

use App\Notifications\Company\VerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Company extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $fillable=
        [
            'name','tagline','about','email','phone','password','address','image'
        ];

    public function jobposts()
    {
        return $this->hasMany(JobPost::class);
    }

    public function jobskills()
    {
        return $this->hasMany(JobSkills::class);
    }

    public function testimonials()
    {
        return $this->hasMany(Testimonials::class);
    }

    /**
     * Get all of the requests for the company.
     */
    public function requests()
    {
        // auth('company')->user()->requests()->get()
        return $this->hasManyThrough(
            \App\Request::class,
            \App\JobPost::class,

            'company_id', // Foreign key on users table...
            'jobpost_id', // Foreign key on posts table...
            'id', // Local key on countries table...
            'id' // Local key on users table...
        );
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }


    /**
     * Send the email verification notification.
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmail());
    }
}
