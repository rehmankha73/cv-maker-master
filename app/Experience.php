<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable=[
        'data_id','companies','posts','join_date','leave_date','E_des'
    ];

    public function data()
    {
        return $this->belongsTo(Data::class);
    }
}
