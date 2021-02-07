<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    //Definimos la relación One To Many con la tabla 'vehicle'
    public function vehicles()
    {
        // Método que devuelve un array de objetos con los vehículos asociados a la categoría
        return $this->hasMany(Vehicle::class);
    }
}
