<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function vehicles(){
        return $this->belongsTo('App\Models\Vehicles', 'vehicle_id', 'id');
    }

    public function driver(){
        return $this->belongsTo( 'App\Models\Driver', 'motorista_id', 'id');
    }
}
