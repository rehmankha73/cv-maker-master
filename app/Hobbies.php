<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobbies extends Model
{
    protected $fillable = [
        'data_id', 'hobbies'
    ];

    public function data()
    {
        return $this->belongsTo(Data::class);
    }
}
