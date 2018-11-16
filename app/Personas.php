<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
   protected $fillable = ['nombrecompleto','sexo','ci','telefono','colordeojos','tipoS','estatura','peso'];
}
