<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facturaciones extends Model
{
   protected $fillable = [
    	'fecha','clientes_id'
    ];
}
