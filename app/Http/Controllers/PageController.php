<?php

namespace App\Http\Controllers;
use App\Place;
use Illuminate\Http\Request;

class PageController extends Controller
{
    
public function index(){
    $places = Place::all();
    
    return view('vacanze', compact('places'));
}

}
