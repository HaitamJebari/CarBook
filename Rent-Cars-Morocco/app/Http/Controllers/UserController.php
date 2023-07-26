<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function GetCarsIndex()
    {

        $Cars = Car::take(6)->get();

        return view('user.index', ['Cars' => $Cars]);

    }


    public function GetCarPricing()
    {
        $Cars=Car::All();


        return view('user.pricing', ['Cars' => $Cars]);

    }

    public function GetAllcars()
    {

        $Cars=Car::paginate(6);


        return view('user.car', ['Cars' => $Cars]);

    }
}
