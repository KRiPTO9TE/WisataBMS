<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kmenu extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'kuliner_id', 

        'judul', 

        'image',
        'detail' 

        

    ];
}
