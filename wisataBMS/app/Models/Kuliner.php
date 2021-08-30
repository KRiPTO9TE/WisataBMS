<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Admin as Authenticatable;
  

class Kuliner extends Model

{

    use HasFactory;

  

    protected $fillable = [

        'name', 
        
        'image',

        'detail', 

        'category', 

        'mapslat',
        'mapslong',

        'alamat',
        
        'bukday',
        'bukend',
        'ttpday',
        'ttpend',
        
        'fasi',

        'web',
        'telefon'

    ];
    public function setFasiAttribute($value)
    {
        $this->attributes['fasi'] = json_encode($value);
    }

    public function getFasiAttribute($value)
    {
        return $this->attributes['fasi'] = json_decode($value);
    }
}