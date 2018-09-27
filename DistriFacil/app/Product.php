<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

	protected $fillable = ['nombre', 'direccion', 'sabor', 'descripcion', 'cantidad', 'tipo', 'precio', 'imagen', 'visible'];




    // Relation with OrderItem
    public function order_item()
    {
        return $this->hasOne('App\OrderItem');
    }
    public function scopeNombre($query, $nombre)
    {

     $query->where('nombre',"LIKE","%$nombre%")
           ->orWhere("tipo","like","%$nombre%");



    }






}
