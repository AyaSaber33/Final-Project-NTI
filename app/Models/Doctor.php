<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = 'doctors'; 
    
    protected $fillable = [
        'name',
        'major',
        'discription',
    ];

    public $timestamps = true; 
}

