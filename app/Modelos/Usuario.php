<?php

namespace App\Modelos;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Usuario extends User
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';

    public $fillable = [
    	'nombres', 'apellidos', 'email', 'username', 'password', 'tipo'
    	];

    public function setPasswordAttribute($value)
    {
    	if($value !== null)
    		$this->attributes['password'] = bcrypt($value);
    }

    public function getNombreCompletoAttribute()
    {
        return $this->attributes['nombres'] . ' ' .
            $this->attributes['apellidos'] ;
            
    }
}
