<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $table = 'Instructors';
    protected $primaryKey = 'id_Instructor';
    public function getRouteKeyName(){

    	return 'slug';
    }
}
