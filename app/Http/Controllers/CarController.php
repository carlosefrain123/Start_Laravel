<?php

namespace App\Http\Controllers;

use App\Models\Car;//TODO: Se le coloca el nombre de la clase, del model
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        $cars=Car::all();
        return view('car.index',compact('cars'));
    }
}
