<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = "servicios";

    protected $fillable = ['nombre','abreviatura','descripcion','descripcionAlt1','descripcionAlt2','imagen1','imagen2','icono1','icono2','tipo','prioridad','link','estado',];

    public function srvvideots()
    {
    	return $this->hasMany('App\Srvvideot');
    }

    public function perfils()
    {
    	return $this->belongsToMany(Perfil::Class, 'perfil_servicios','idServicio', 'idPerfil')->withTimestamps();;
    }
}
