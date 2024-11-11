<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Vehicles;
use App\Models\Driver;
use App\Models\Travel;
use Carbon\Carbon;

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
        if($request->name == ''){
            return redirect('/register/driverRegister')->with('msg-negative', 'Valores não informados');
        }

        $register->birth = $request->birth;
        if($request->birth == ''){
            return redirect('/register/driverRegister')->with('msg-negative', 'Valores não informados');
        }
        $now = Carbon::now();

        $diff = $now->diffInYears($request->birth);
        if($diff<18){
            return redirect('/register/driverRegister')->with('msg-negative','Menor de idade');
        }

        $register->cnh = $request->cnh;
        if($request->cnh == ''){
            return redirect('/register/driverRegister')->with('msg-negative', 'Valores não informados');
        }
        //image upload
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
        
            $extension = $requestImage->extension();
        
            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")).".".$extension;
        
            $requestImage->move(public_path('/img/driver'), $imageName);
        
            $register->image = $imageName;
        }

        $register->save();
        return redirect('/motorista')->with('msg', 'Motorista cadastrado com sucesso!');
    }
    public function storeVehicle(Request $request){
        $register = new Vehicles;

        $register->carModel = $request->carModel;
        if($request->carModel == ''){
            return redirect('/register/vehicleRegister')->with('msg-negative', 'Valores não informados');
        }
        $register->year = $request->year;
        if($request->year == ''){
            return redirect('/register/vehicleRegister')->with('msg-negative', 'Valores não informados');
        }
        $register->acquisition = $request->acquisition;
        if($request->acquisition == ''){
            return redirect('/register/vehicleRegister')->with('msg-negative', 'Valores não informados');
        }
        $register->kmDriven = $request->kmDriven;
        if($request->kmDriven == ''){
            return redirect('/register/vehicleRegister')->with('msg-negative', 'Valores não informados');
        }
        $register->reinder = $request->reinder;
        if($request->reinder == ''){
            return redirect('/register/vehicleRegister')->with('msg-negative', 'Valores não informados');
        }
        //image upload
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")).".".$extension;

            $requestImage->move(public_path('/img/vehicle'), $imageName);

            $register->image = $imageName;
        }

        $register->save();

        return redirect('/veiculo')->with('msg', 'Veículo cadastrado com sucesso!');

    }

    public function storeTravel(Request $request){
        $register = new Travel;

        $register->km_inicio = $request->km_inicio;
        if($request->km_inicio == ''){
            return redirect('/register/travelRegister')->with('msg-negative', 'Valores não informados');
        }
        $register->km_fim = $request->km_fim;
        if($request->km_fim == ''){
            return redirect('/register/travelRegister')->with('msg-negative', 'Valores não informados');
        }
        $register->origem = $request->origem;
        if($request->origem == ''){
            return redirect('/register/travelRegister')->with('msg-negative', 'Valores não informados');
        }
        $register->destino = $request->destino;
        if($request->destino == ''){
            return redirect('/register/travelRegister')->with('msg-negative', 'Valores não informados');
        }
        $register->motorista_id = $request->motorista_id;
        if($request->motorista_id == ''){
            return redirect('/register/travelRegister')->with('msg-negative', 'Valores não informados');
        }
        $register->veiculo_id = $request->motorista_id;
        if($request->veiculo_id == ''){
            return redirect('/register/travelRegister')->with('msg-negative', 'Valores não informados');
        }
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
        return view('show.driverShow', ['driver' => $driver]);
    }

    public function travelShow($id){
        $travel = Travel::findOrFail($id);
        return view('show.travelShow', ['travel' => $travel]);
    }

    public function vehicleShow($id){
        $vehicle = Vehicles::findOrFail($id);
        return view('show.vehicleShow', ['vehicle'=> $vehicle]);
    }

    public function destroyVehicle($id){

        Vehicles::findOrFail($id)->delete();
        
        return redirect('/veiculo')->with("msg", "Veículo excluido com sucesso!");

    }

    public function destroyDriver($id){

        Driver::findOrFail($id)->delete();
        
        return redirect('/motorista')->with('msg', "Apagado com sucesso");

    }

    public function destroyTravel($id){
        
        Travel::findOrFail($id)->delete();

        return redirect('/viagem')->with('msg', 'Viagem apagada com sucesso!');

    }

    public function edit($id){

        $driver = Driver::findOrFail($id);

        return view('update.driverEdit',['driver'=>$driver]);

    }

    public function travelEdit($id){

        $travel = Travel::findOrFail($id);

        return view('update.travelEdit', ['travel'=>$travel]);

    }

    public function vehicleEdit($id){

        $vehicle = Vehicles::findOrFail($id);

        return view('update.vehicleEdit', ['vehicle'=>$vehicle]);

    }

    public function driverUpdate(Request $request){
        $driver = $request->all();
        //image upload
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
        
            $extension = $requestImage->extension();
        
            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")).".".$extension;
        
            $requestImage->move(public_path('/img/driver'), $imageName);
        
            $driver['image'] = $imageName;
        }

        Driver::findOrFail($request->id)->update($driver);

        return redirect('/motorista')->with('msg', 'Dados salvos com sucesso!');
    }

    public function travelUpdate(Request $request){
        $travel = $request->all();
        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();
            
            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")).".".$extension;

            $requestImage->move(public_path('/img/travel'), $imageName);

            $travel['image'] = $imageName;
        }

        Travel::findOrFail($request->id)->update($travel);
        return redirect('/viagem')->with('msg', 'Dados salvos com sucesso!');
    }

    public function vehicleUpdate(Request $request){
        $vehicle = $request->all();
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
        
            $extension = $requestImage->extension();
        
            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")).".".$extension;
        
            $requestImage->move(public_path('/img/vehicle'), $imageName);
        
            $vehicle['image'] = $imageName;
        }

        Vehicles::findOrFail($request->id)->update($vehicle);
        return redirect('/veiculo')->with('msg', 'Dados salvos com sucesso!');
    }
}
