<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    public function jobs()
    {
        return $this->hasMany('App\Job');
    }
}
