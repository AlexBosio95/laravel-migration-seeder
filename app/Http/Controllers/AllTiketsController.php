<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class AllTiketsController extends Controller
{
    //

    public function Tikets(){

        try {
            $Trains = Train::orderBy('departure_time', 'ASC')->get();
            return view('AllTikets', compact('Trains'));

        } catch (\Throwable $th) {
            return view('ErrorPage');
        }
        
    }
}
