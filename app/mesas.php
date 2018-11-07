<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mesas extends Model
{
    protected $primaryKey = 'id_mesa';
    protected $fillable=['id_mesa','numero_de_personas','id_zona'];
}
