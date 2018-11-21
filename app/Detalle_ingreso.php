<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Detalle_ingreso extends Model
{
    protected $table = ('detalle_ingresos');
    protected $filleable = [
        'cantidad',
        'precio_compra',
        'precio_venta',
        'idingresos',
        'idarticulos'];

        public function ingresos()
        {
            return $this->belongsTo('sisVentas\Ingreso');
        }

        public function articulos()
        {
            return $this->belongsTo('sisVentas\Articulo');
        }
}
