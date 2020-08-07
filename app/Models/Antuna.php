<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Antuna extends Model
{
    protected $table = 'antuna';

    protected $fillable = [
        'Nombre',
        'Apellido',
        'Nacimiento',
        'Edad',
    
    ];
    
    
    protected $dates = [
        'Nacimiento',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/antunas/'.$this->getKey());
    }
}
