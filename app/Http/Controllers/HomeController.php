<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function Home(){

        // try {
            $Trains = Train::all();
            return view('Homepage', compact('Trains'));

        // } catch (\Throwable $th) {
        //     return view('ErrorPage');
        // }

        
    }
}
