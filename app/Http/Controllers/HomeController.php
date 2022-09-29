<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function Home(){

        try {
            $TrainsToday = Train::whereDate('date', Carbon::today())->get();
            return view('Homepage', compact('TrainsToday'));

        } catch (\Throwable $th) {
            return view('ErrorPage');
        }

        
    }
}
