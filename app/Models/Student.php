<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    protected $table = "student";

    public function major()
    {
        return $this->hasOne('App\Models\Major','id','major_id');
    }
}
