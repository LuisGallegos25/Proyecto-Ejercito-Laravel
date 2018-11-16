<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
   protected $fillable = ['nombres','sexo','ci','telefono','sangre','estatura','peso'];
}
