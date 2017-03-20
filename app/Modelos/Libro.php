<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $primaryKey = 'id_libro';

    public $fillable = [
    	'titulo', 'descripcion',
    ];
}
