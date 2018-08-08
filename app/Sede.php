<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    protected $table = "sedes";

    protected $fillable = "['nombre','abreviatura',]";

    public function user()
    {
    	return $this->hasMany('App\User');
    }
}
