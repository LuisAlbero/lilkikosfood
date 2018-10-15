<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
    protected $primaryKey = 'id_empleado';  
  	protected $fillable=['id_empleado','nombre'];
 
}
