<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TravelPackage;

class HomeController extends Controller
{
    public function index(){

        $travelPackages = TravelPackage::all();


        return view('home', compact('travelPackages'));
    }
}
