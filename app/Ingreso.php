<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    protected $table = ('ingresos');
    protected $filleable = [
        'tipo_comprobante',
        'serie_comprobante',
        'num_comprobante',
        'fecha_hora',
        'impuesto',
        'estado',
        'idpersonas'];

        public function personas()
        {
            return $this->belongsTo('sisVentas\Persona');
        }

        public function detalle_ingresos()
        {
            return $this->hasmany('sisVentas\Detalle_ingreso');
        }
}
