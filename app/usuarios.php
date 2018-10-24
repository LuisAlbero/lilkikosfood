<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    protected $primaryKey = 'id_usuario';
 protected $fillable=['id_usuario','login','password','tipo_de_usuario','id_empleado'];
}
