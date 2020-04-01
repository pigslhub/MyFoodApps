<?php

namespace App\Http\Controllers\Customer\API;

use App\Http\Controllers\Controller;
use App\Models\general\Payment;
use Illuminate\Http\Request;
use Omnipay\Omnipay;

class PaymentController extends Controller
{
    public $successStatus = 200;
    public function __construct()
    {
        $this->middleware('auth:api_customer');
    }

    public function charge(Request $request)
    {
        if ($request->input('stripeToken')) {

            $gateway = Omnipay::create('Stripe');
            $gateway->setApiKey(env('STRIPE_SECRET_KEY'));

            $token = $request->input('stripeToken');

            $response = $gateway->purchase([
                'amount' => $request->input('amount'),
                'currency' => env('STRIPE_CURRENCY'),
                'token' => $token,
            ])->send();

            if ($response->isSuccessful()) {
                // payment was successful: insert transaction data into the database
                $arr_payment_data = $response->getData();

                $isPaymentExist = Payment::where('payment_id', $arr_payment_data['id'])->first();

                if(!$isPaymentExist)
                {
                    $payment = new Payment;
                    $payment->payment_id = $arr_payment_data['id'];
                    $payment->payer_email = $request->input('email');
                    $payment->amount = $arr_payment_data['amount']/100;
                    $payment->currency = env('STRIPE_CURRENCY');
                    $payment->payment_status = $arr_payment_data['status'];
                    $payment->save();
                }

//                return response()->json("Payment is successful. Your payment id is: ". $arr_payment_data['id'], $this->successStatus);

                return response()->json();
            } else {
                // payment failed: display message to customer
                return response()->json($response->getMessage());
            }
        }
    }
}
