<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = "libros";
    protected $fillable = [
        'titulo', 'autor_id'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
    public function autor(){    
    return $this->belongsTo(Autor::class);
    }
}
