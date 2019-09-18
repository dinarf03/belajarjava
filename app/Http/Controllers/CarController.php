<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{

    public function index(){
        $car = Car::all();

        return ($car);
    }

    public function tambah(Request $request){
        $car = new Car();

        $car->model = $request->model;
        $car->nama_mobil = $request->nama_mobil;
        $car->warna = $request->warna;
        $car->plat_nomor = $request->plat_nomor;
        $car->harga_sewa = $request->harga_sewa;
        $car->save();

        return "Data Berhasil Terinput";
    }
}
