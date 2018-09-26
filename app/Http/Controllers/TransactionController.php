<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;

class TransactionController extends Controller
{
    //

    public function validateTransaction(Request $request){
      $invoice = $request->get('BillRefNumber',0);
      if($invoice != 1000){
        return $this->invalidResponse();
      }

      return $this->successfulResponse();

    }

    public function confirmTransaction(Request $request){
      return $this->successfulResponse();
    }

    protected function successfulResponse(){
      return response()->json([
        'ResultCode'=> 0,
        'ResultDesc'=>'Transaction completed successfully',
        'ThirdPartyTransID' => 1
      ]);

    }

    protected function invalidResponse(){
      return response()->json([
        'ResultCode' => 1,
        'ResultDesc' => 'Failed to complete the transaction',
        'ThirdPartyTransID' => 0
      ]);

    }
}
