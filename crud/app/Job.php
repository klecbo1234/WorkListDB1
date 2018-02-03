<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';

    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
