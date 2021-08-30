<?php

  

namespace App\Models;

  

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Admin as Authenticatable;
  

class Fgambar extends Model

{

    use HasFactory;

  

    protected $fillable = [

        'fasilitas_id', 

        'image'
            
    ];

}