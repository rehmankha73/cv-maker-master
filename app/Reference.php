<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    protected $fillable=
        [
            'data_id','references','refphone','refaddress'
        ];
    public function data()
    {
        return $this->belongsTo(Data::class);
    }
}
