<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calculo extends Model
{
    use HasFactory;

    protected $table = "calculo";

    protected $fillable = [
      'velocidad',
      'aceletacion',
      'timepo'
    ];
}
