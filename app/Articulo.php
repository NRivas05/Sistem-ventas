<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = ('articulo');
    protected $filleable = [
        'codigo',
        'nombre',
        'stock',
        'descripcion',
        'imagen',
        'estado',
        'idcategorias'];

        public function categorias()
        {
            return $this->belongsTo('sisVentas\Categoria');
        }

        public function detalle_ingresos()
        {
            return $this->hasmany('sisVentas\Detalle_ingreso');
        }

        public function detalle_ventas()
        {
            return $this->hasmany('sisVentas\Detalle_venta');
        }
}
