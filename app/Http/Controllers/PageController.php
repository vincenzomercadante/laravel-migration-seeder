<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * route for the homepage
     *  
     * return view of the homepage with the train array
     * 
     */    

    public function index(){
        $trains = Train::whereDate('departure_hours', today())->get();
        return view("home",compact("trains"));
    }
}
