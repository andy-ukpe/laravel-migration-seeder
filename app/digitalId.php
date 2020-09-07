<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DigitalId extends Model
{
  protected $table='digital_id';
    //Creating fillable areas
    protected $fillable = [
      'name',
      'birthPlace',
      'birthDate',
      'sex',
      'nationalNumber'
    ];
}
