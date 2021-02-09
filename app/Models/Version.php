<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    use HasFactory;

    //Definimos la relación One To Many con la tabla 'vehicle'
    public function vehicles()
    {
        // Método que devuelve un array de objetos con los vehículos asociados a la versión
        return $this->hasMany(Vehicle::class);
    }

    //Definimos la relación ManyToOne con la tabla'brand'
    public function brand()
    {
        //este método devuelve el objeto Brand del que se ha hecho el like
        return $this->belongsTo(Brand::class,'brands_id');
    }
    
}
