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

    public function store(Request $request){
        $register = new Driver();

        $register->name = $request->name;
        $register->birth = $request->birth;
        $register->cnh = $request->cnh;
        $register->save();

                //image upload
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
        
            $extension = $requestImage->extension();
        
            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")).".".$extension;
        
            $requestImage->move(public_path('/img/driver'), $imageName);
        
            $register->image = $imageName;
        }

        return redirect('/motorista')->with('msg', 'Motorista cadastrado com sucesso!');
    }
    public function storeVehicle(Request $request){
        $register = new Vehicles;

        $register->carModel = $request->carModel;
        $register->year = $request->year;
        $register->acquisition = $request->acquisition;
        $register->kmDriven = $request->kmDriven;
        $register->reinder = $request->reinder;

        //image upload
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")).".".$extension;

            $requestImage->move(public_path('/img/vehicle'), $imageName);

            $register->image = $imageName;
        }

        $register->save();

        return redirect('/veiculo')->wirh('msg', 'Veículo cadastrado com sucesso!');

    }

    public function storeTravel(Request $request){
        $register = new Travel;

        $register->km_inicio = $request->km_inicio;
        $register->km_fim = $request->km_fim;
        $register->motorista_id = $request->motorista_id;
        $register->veiculo_id = $request->motorista_id;

        //image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();
            
            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")).".".$extension;

            $requestImage->move(public_path('/img/travel'), $imageName);

            $register->image = $imageName;
        }

        $register->save();

        return redirect('/viagem')->with('msg', 'Viagem cadastrada com sucesso!');
    }

    public function driverShow($id){
        $driver = Driver::findOrFail($id);
        return view('register.driverShow', ['driver' => $driver]);
    }

}
