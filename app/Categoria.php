<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = ('categorias');
    protected $primarykey='idcategoria';
    public $timestamps=false;
    protected $filleable = [
        'nombre',
        'descripcion',
        'condicion'];

        protected $guarded=[

        ];

        public function articulos()
        {
            return $this->hasmany('sisVentas\Articulo');
        }

}
