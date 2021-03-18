<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    protected $fillable=
        [
            'user_id','notes'
        ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
