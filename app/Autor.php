<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $fillable = [
        'nombre', 'descripcion'
    ];
    public function libros()
    { 
        return $this->hasMany(Libro::class);
    }
}
