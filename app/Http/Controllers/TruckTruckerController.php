<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use App\Models\Trucker;
use Illuminate\Http\Request;

class TruckTruckerController extends Controller
{
    public function asociar(){

        $trucks = Truck::all();
        $truckers = Trucker::all();
       
        return view('truck_trucker.asociar',compact('trucks','truckers'));

    }

    public function store(Request $request){

        $truck=Truck::find($request->truck_id);
        $truck->truckers()->attach($request->truck_id);

        return "registro completado";

    }
}
