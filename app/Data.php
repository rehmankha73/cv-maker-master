<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'image',
        'fathername',
        'biography',
        'date',
        'address',
        'position',
        'email',
        'number',
        'facebook',
        'linkedin',
        'twitter',
        'cvno'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function qualifications()
    {
        return $this->hasMany(Qualification::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    public function skills()
    {
        return $this->hasMany(Skills::class);
    }

    public function languages()
    {
        return $this->hasMany(Languages::class);
    }

    public function hobbies()
    {
        return $this->hasMany(Hobbies::class);
    }

    public function references()
    {
        return $this->hasMany(Reference::class);
    }

}
