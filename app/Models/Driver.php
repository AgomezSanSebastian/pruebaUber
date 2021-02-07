<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    //Definimos la relación One To Many con la tabla 'rides'
    public function rides()
    {
        // Método que devuelve un array de objetos con las carreras asociados al conductor
        return $this->hasMany(Ride::class);
    }

    //Definimos la relación ManyToOne con la tabla'users'
    public function user()
    {
        //este método devuelve el objeto User del que se ha hecho el like
        return $this->belongsTo(User::class,'user_id');
    }
}
