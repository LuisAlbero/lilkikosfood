<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $primaryKey = 'id_cliente';  
  	protected $fillable=['id_cliente','nombre','apellido1','apellido2','telefono','email','rfc','calle','numero','colonia','c_p','estado'];
 
}
