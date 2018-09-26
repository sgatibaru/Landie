<?php

namespace App\Http\Controllers;

use App\Houses;
use Illuminate\Http\Request;

class HousesController extends Controller
{
    //


    public function index() {

      $houses = Houses::all();
      return view('landlord.partials.houses',compact('houses'));

    }

    public function create(){

    }

    public function store(Request $request){
      
      $house = new Houses();
      $house->housename = $request->housename;
      $house->housenumber = $request->housenumber;
      $house->housetype = $request->housetype;
      $house->rent = $request->rent;
      $house->save();

      return redirect()->route('getHouses');

      }

    public function edit(){

    }

}
