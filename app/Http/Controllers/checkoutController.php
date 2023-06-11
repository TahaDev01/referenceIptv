<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;



class checkoutController extends Controller
{

    public function checkout(Request $request)
    {
       $stripe = \Cartalyst\Stripe\Laravel\Facades\Stripe::setApiKey(env('STRIPE_SECRET'));
     
       try{
        $dataPayment = $request->input('dataPayment');
        $token = $stripe->tokens()->create([
            'card' => [
              'name'=>$dataPayment['name'], 
              'number' => $dataPayment['number'],
              'exp_year' =>intval($dataPayment['year']),
              'exp_month' =>intval($dataPayment['month']),
              'cvc' => intval($dataPayment['cvc']),   
            ]
          ]);

          if (!isset($token['id'])) {
            return redirect()->route('stripe.add.money');
          }
            
          $charge = $stripe->charges()->create([
            'card' => $token['id'],
            'currency' => 'USD',
            'amount' => $dataPayment['price'],
            'description' => 'course spring boot', 
          ],);
            
           if($charge['status'] == 'succeeded') {  
                $data = [
                    'StatusVisa' =>$charge['status'], 
                    'id' =>$charge['id'],
                    'status'=>$charge['status'] 
                ]; 
           }else return response()->json(['error' => 'Internal Server Error'], 500);
       }catch(\Exception $e){
            return response()->json(['error' => 'Internal Server Error'], 500);
       }
        

    }

}
