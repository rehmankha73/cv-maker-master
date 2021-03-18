<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'about',
        'profile_image',
        'father_name',
        'dob',
        'email',
        'phone',
        'address',
        'country',
        'city',
        'code',
        'password',
        'gender',
        'email_verified_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to carbon date.
     *
     * @var array
     */
    protected $dates = [
        'dob'
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function data()
    {
        return $this->hasOne(Data::class);
    }
     public function testimonials()
     {
         return $this->hasMany(Testimonials::class);
     }
     public function notes()
     {
         return $this->hasMany(Notes::class);
     }
    public function requests()
    {
        return $this->hasMany(Request::class, 'user_id');
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

}
