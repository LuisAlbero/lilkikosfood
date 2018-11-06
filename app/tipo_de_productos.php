<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_de_productos extends Model
{
 protected $primaryKey = 'id_tipo_producto';
 protected $fillable=['id_tipo_producto','nombre','activo'];
 
}
