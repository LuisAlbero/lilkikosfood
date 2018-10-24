<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mesas extends Model
{
    protected $primaryKey = 'id_mesa';
    protected $fillable=['id_mesa','id_zona'];
}
