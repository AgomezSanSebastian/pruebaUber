<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{
    use HasFactory;

    //Definimos la relación ManyToOne con la tabla 'vehicles'
    public function vehicle()
    {
        //este método devuelve el objeto vehicle del que se ha hecho el like
        return $this->belongsTo(Vehicle::class,'vehicle_id');
    }

    //Definimos la relación ManyToOne con la tabla'drivers'
    public function driver()
    {
        //este método devuelve el objeto conductor del que se ha hecho el like
        return $this->belongsTo(Driver::class,'driver_id');
    }

    //Definimos la relación ManyToOne con la tabla'customers'
    public function customer()
    {
        //este método devuelve el objeto cliente del que se ha hecho el like
        return $this->belongsTo(Customer::class,'customer_id');
    }

}
