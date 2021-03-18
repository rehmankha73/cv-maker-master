<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Languages extends Model
{
    protected $fillable=[
        'data_id','languages','languages_level'
    ];

    public function data()
    {
        return $this->belongsTo(Data::class);
    }
}
