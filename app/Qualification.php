<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    protected $fillable = [
        'data_id', 'degree', 'insitude', 'session', 'marks', 'total','Q_des'
    ];

    public function data()
    {
        return $this->belongsTo(Data::class);
    }
}
