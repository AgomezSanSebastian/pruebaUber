<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    //Definimos la relación ManyToOne con la tabla'categories'
    public function category()
    {
        //este método devuelve el objeto Brand del que se ha hecho el like
        return $this->belongsTo(Categorie::class,'category_id');
    }

    //Definimos la relación ManyToOne con la tabla'versions'
    public function version()
    {
        //este método devuelve el objeto versión del que se ha hecho el like
        return $this->belongsTo(Version::class,'version_id');
    }

    //Definimos la relación One To Many con la tabla 'rides'
    public function rides()
    {
        // Método que devuelve un array de objetos con las carreras asociados al vehiculo
        return $this->hasMany(Ride::class);
    }
}
