<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = "perfils";

    protected $fillable = ['nombre','abreviatura','descripcion',];

    public function users()
    {
    	return $this->hasMany('App\User');
    }

    public function servicios()
    {
    	return $this->belongsToMany(Servicio::Class,'perfil_servicios','idPerfil','idServicio')->withTimestamps();;
    }
}
