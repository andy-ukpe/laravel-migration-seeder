<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class digitalId extends Model
{
    //Creating fillable areas
    protected $fillable = [
      'name',
      'birthPlace',
      'birthDate',
      'sex',
      'nationalNumber'
    ];
}
