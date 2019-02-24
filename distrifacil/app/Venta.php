<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table='venta';

    protected $primaryKey='idventa';

    public $timestamps=false;

    protected $fillable =[
    	'idcliente',
    	'tipo_comprobante',
    	'num_comprobante',
    	'fecha_hora',
    	'total_venta',
    	'estado'
    ];
    protected $guarded =[
    ];
}