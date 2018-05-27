<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
     protected $fillable = [
       	'clientes_id', 'placa'
    ];
}
