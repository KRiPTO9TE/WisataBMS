<?php

  

namespace App\Models;

  

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Admin as Authenticatable;
  

class Wisata extends Model

{

    use HasFactory;

  

    protected $fillable = [

        'name', 

        'detail', 

        'image','image1','image2','image3',

        'btdays','btend', 

        'category', 

        'mapslat','mapslong',

        'alamat',

        'tika','tikd',

        'web',
        'telefon'

    ];

}