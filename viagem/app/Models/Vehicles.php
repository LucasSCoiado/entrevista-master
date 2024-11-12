<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function viagem(){
        return $this->hasMany('App\Models\Viagem','vehicle_id', 'id');
    }

    public function travel(){
        return $this->hasMany('App\Models\Travel', 'vehicle_id', 'id');
    }
}
