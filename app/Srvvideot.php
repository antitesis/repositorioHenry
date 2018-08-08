<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Srvvideot extends Model
{
    protected $table = "srvvideots";

    protected $fillable = ['nombre','abreviatura','descripcion','descripcionAlt1','imagen','icono','video','idServicio',];

   	public function servicio()
   	{
   		return $this->belongsTo('App\Servicio');
   	}
}
