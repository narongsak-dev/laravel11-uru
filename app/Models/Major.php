<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;
    protected $table = "major";

    public function student()
    {
        return $this->hasMany('App\Models\Student','major_id','id');
    }

}
