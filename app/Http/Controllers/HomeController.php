<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function Home(){

        try {
            // $Movies = Train::all();
            return view('Homepage',);
        } catch (\Throwable $th) {
            return view('ErrorPage');
        }

        
    }
}
