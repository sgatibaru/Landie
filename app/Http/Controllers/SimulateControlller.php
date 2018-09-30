<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SmoDav\Mpesa\Laravel\Facades\Simulate;
class SimulateControlller extends Controller
{
    //

    public function SimulateRent(){

        $response = Simulate::request(12000)
            ->from(254708374149)
            ->usingReference(254708374149)
            ->setCommand(CUSTOMER_PAYBILL_ONLINE)
            ->push();

        return response()->json([
            'response' => $response,
            'next' => 'Please check your ngrok endpoints and validate that BOTH the validate and confirm endpoint will be called. Also check the Transactions table.'
        ]);
    }
}
