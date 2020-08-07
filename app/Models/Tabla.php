<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tabla extends Model
{
    protected $table = 'tabla';

    protected $fillable = [
        'Nombre',
        'Direccion',
        'Telefono',
        'Edad',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/tablas/'.$this->getKey());
    }
}
