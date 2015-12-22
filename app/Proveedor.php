<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedors';
    
    protected $fillable = [
        'nombre',
        'direccion',
        'localidad',
        'contacto'
        
    ];
}
