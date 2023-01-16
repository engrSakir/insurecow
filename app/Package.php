<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $guarded=[];

    public function company()
    {
        return $this->belongsTo(Company::class, 'user_id', 'id');
    }
}
