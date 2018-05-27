<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventarios extends Model
{
    protected $fillable = [
    	'descripcion', 'precio_compra', 'precio_venta','stock','stock_min', 'stock_max',
    	'tipop_id'
    							
    ];
}
