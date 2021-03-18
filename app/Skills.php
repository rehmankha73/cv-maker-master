<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    protected $fillable =
        [
            'skills', 'skills_level', 'data_id'
        ];

    public function data()
    {
        return $this->belongsTo(Data::class);
    }

}
