<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listass extends Model
{
    protected $table = 'listatarea';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre'];
}
