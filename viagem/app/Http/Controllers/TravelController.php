<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Vehicles;
use App\Models\Driver;
use App\Models\Travel;

class TravelController extends Controller
{
    
    public function index(){
        $drivers= Driver::all();
        $vehicles = Vehicles::all();
        $travels = Travel::all();
        return view('welcome', ['drivers'=>$drivers, 'travels'=>$travels,'vehicles'=>$vehicles]);
    }

    public function vehicle(){
        $vehicles = Vehicles::all();
        return view('vehicle', ['vehicles'=>$vehicles]);
    }

    public function trip(){
        $travels = Travel::all();
        return view('trip', ['travels'=>$travels]);
    } 

    public function driver(){
        $drivers= Driver::all();      
        

        return view('driver',['drivers'=>$drivers]);
    }

    public function travelRegister(){
        return view('register.travelRegister');
    }

    public function driverRegister(){
        return view('register.driverRegister');
    }

    public function vehicleRegister(){
        return view('register.vehicleRegister');
    }

}
