<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $table = "notas";

    protected $fillable = ['titulo','descripcion','solicitante','encargado','estado','fechaInicio','duracion','comentarios',];
}
