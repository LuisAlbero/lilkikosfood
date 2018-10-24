<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class zonas extends Model
{

    protected $primaryKey = 'id_zona';
    protected $fillable=['id_zona','zona'];
}
