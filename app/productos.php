<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $primaryKey = 'id_producto';
 protected $fillable=['id_producto','nombre','descripcion','precio','id_tipo_producto','archivo'];
}
