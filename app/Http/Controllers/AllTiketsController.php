<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class AllTiketsController extends Controller
{
    //

    public function Tikets(){

        try {
            $Trains = Train::all();
            return view('AllTikets', compact('Trains'));

        } catch (\Throwable $th) {
            return view('ErrorPage');
        }
        
    }
}
