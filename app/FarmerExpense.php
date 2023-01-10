<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FarmerExpense extends Model
{
    //

    protected $guarded = [];

    public function cattle()
    {
        return $this->belongsTo(Farmer_reg_2::class, 'cattle_id');
    }
}
