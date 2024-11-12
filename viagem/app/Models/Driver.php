<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $dates = ['birth'];

    public function viagem(){
        return $this->hasMany('App\Models\Viagem', 'motorista_id','id');
    }

    public function travel(){
        return $this->hasMany('App\Models\Travel', 'motorista_id','id');
    }
}
