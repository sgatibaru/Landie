<?php

namespace App\Http\Controllers;

use App\Houses;
use App\Tenants;
use Illuminate\Http\Request;

class HousesController extends Controller
{
    // function to return the number of months a tenant have
    // been in a house, the rent expected for that period and the rent
    // that have been paid upto the present date

    // public function alias($tenant_id){
    //   // calculate the differnce in months between entry month
    //   // and current month
    //   $tenant_history = Tenants::findOrFail($tenant_id);
    //   //find the details of the house the tenant have ranted
    //   $house = Houses::findOrFail($tenant_history->houses_id);
    //
    //   $entry_month = $tenant_history->created_at;
    //   $current_month = date('Y/m/d H:i:s');
    //
    //   $interval = $entry_month->diff($current_month);
    //
    //   $months_occupied = $interval->m;
    //
    //
    //   //take a total of the rent paid to his account
    //   $rent_paid = $tenant_history->paid;
    //   //take the expected rent for the house and multiply it by the months difference
    //   $rent_payable = $house->rent * $months_occupied;
    //
    //   // take the difference in rents to find the balance
    //   $rent_balance = $rent_payable - $rent_paid;
    //
    //   // update his database on his transaction
    //
    //   $tenant_history->paid = $tenant_history->paid;
    //   $tenant_history->balance = $rent_balance;
    //
    //   $tenant_history->save();
    //
    // }


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
