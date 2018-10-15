<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipodeproductos extends Model
{
    protected $primaryKey = 'id_tipodeproducto';  
  	protected $fillable=['id_tipodeproducto','nombre'];
 
}
