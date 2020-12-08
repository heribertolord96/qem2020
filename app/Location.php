<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable =[ 'calle',
    'numero_interior',
    'numero_exterior',
    'city',
    'state',
    'country',
    'latitud',
    'longitud'];
}
