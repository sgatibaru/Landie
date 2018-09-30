<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use Carbon\Carbon;
use App\Tenants;

class TransactionController extends Controller
{
    //

    public function getContact($contact){
      return Tenants::where('contact',$contact)->first();
    }


    public function validateTransaction(Request $request){
    //  $invoice = $request->get('BillRefNumber',0);
      // if($invoice != $this->getContact($request->get('BillRefNumber',0)))
      // {
      //   return $this->invalidResponse();
      // }

      //$transaction = $this->createTransaction($request, $invoice);

      return $this->successfulResponse();

    }




    public function confirmTransaction(Request $request){

      $transact = $this->createTransaction($request);

      return $this->successfulResponse();
    }


    /**
   * Create a new mpesa transaction
   *
   * @param Request $request
   * @param Invoice $invoice
   * @param int     $status
   *
   * @return Transaction
   */
  protected function createTransaction(Request $request)
  {

    $nexmo = app('Nexmo\Client');

    $nexmo->message()->send([
        'to'   => '+254719546525',
        'from' => $request->get('MSISDN'),
        'text' => 'You have received payment from '.$request->get('FirstName'). ' Amount ' .$request->get('TransAmount'),
    ]);

      return Transaction::create([
          'transaction_time' => Carbon::parse($request->get('TransTime', null)),
          'transaction_number' => $request->get('TransID'),
          'amount' => $request->get('TransAmount'),
          'short_code' => $request->get('BusinessShortCode'),
          'bill_reference' => $request->get('BillRefNumber'),
          'mobile_number' => $request->get('MSISDN'),
          'payer_first_name' => $request->get('FirstName'),
          'payer_middle_name' => $request->get('MiddleName'),
          'payer_last_name' => $request->get('LastName'),
          'status' => 1,
      ]);
  }

    // send a sucessful mpesa response to validate and confirm

    protected function successfulResponse(){
      return response()->json([
        'ResultCode'=> 0,
        'ResultDesc'=>'Transaction completed successfully',
        'ThirdPartyTransID' => 1
      ]);

    }

    // send a bad request to safaricom api

    protected function invalidResponse(){
      return response()->json([
        'ResultCode' => 1,
        'ResultDesc' => 'Failed to complete the transaction',
        'ThirdPartyTransID' => 0
      ]);

    }
}
