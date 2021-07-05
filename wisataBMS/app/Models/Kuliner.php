<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Admin as Authenticatable;
  

class Kuliner extends Model

{

    use HasFactory;

  

    protected $fillable = [

        'name', 'detail', 'image', 'category', 'maps'

    ];
}