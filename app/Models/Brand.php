<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table = 'brands';

    //Definimos la relación One To Many con la tabla 'versions'
    public function versions()
    {
        // Método que devuelve un array de objetos con las versiones asociados a la marca
        return $this->hasMany(Version::class);
    }
}
