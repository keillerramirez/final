<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipov extends Model
{
    protected $table='tipov';
 protected $fillable = [
    	'descripcion'
    ];
}
