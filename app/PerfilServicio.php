<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PerfilServicio extends Pivot
{
    protected $table = "perfil_servicios";

    protected $fillable = ['idServicio','idPerfil',];

    public function servicios()
    {
    	return $this->belongsTo('App\Servicio');
    }

    public function perfils()
    {
    	return $this->belongsTo('App\Perfil');
    }
}
