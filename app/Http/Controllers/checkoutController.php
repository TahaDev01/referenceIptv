<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

session_start();

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
    

    public function checkoutVisa(Request $request){

      $validator = $request->validate([  
        'email'=>'required|email',
        'cvc'=>'required|numeric|min:3',
        'cc_number'=>'required',
        'dateExperation'=>'required', 
      ]);  
  
      $dateString = $request->dateExperation; 
      $date = Carbon::createFromFormat('m/y', $dateString);
      $month = (int) $date->format('m');
      $year = (int) $date->format('Y'); 

      $stripe = \Cartalyst\Stripe\Laravel\Facades\Stripe::setApiKey(env('STRIPE_SECRET'));
            
      try{
          $token = $stripe->tokens()->create([
            'card' => [
              'name'=>$request->get('name'),
              'number' => $request->get('cc_number'),
              'exp_month' => $month,
              'exp_year' => $year,
              'cvc' => $request->get('cvc'),  
            ],
          ]);

          if (!isset($token['id'])) {
            return redirect()->route('stripe.add.money');
          }
            
          $charge = $stripe->charges()->create([
            'card' => $token['id'],
            'currency' => 'USD',
            'amount' => $request->get('price'),
            'description' => 'books',
          ]);
            
          if($charge['status'] == 'succeeded') { 
            $data = [
              'StatusVisa' =>$charge['status'], 
              'id' =>$charge['id'],
            ]; 
            return view('payment.success',$data);
          } else {
            return view('payment/oops');
          }
      } catch (\Exception $e) { 
        return view('payment/oops');
      } catch(\Cartalyst\Stripe\Exception\CardErrorException $e) {
        return view('payment/oops');
      } catch(\Cartalyst\Stripe\Exception\MissingParameterException $e) {
        return view('payment/oops');
      } 
    }


    public function checkoutView(Request $request){
      if($request->isMethod('get')){
        $data = $_SESSION['data']; 
        return view('payment.checkout',$data); 
      } 
    
      $data = [
        'price' =>$request->price,
        'offre' =>$request->offre,
        'description'=>$request->description
      ]; 
      $this->saveData($data); 
      return view('payment.checkout',$data);  
    }

    public function saveData($data){
      $_SESSION['data'] = $data;
      return  $_SESSION['data'] ;
    }


    public function productPage(Request $request){

      if($request->isMethod('get')){
        $data = $_SESSION['ProductPage']; 
        return view('productPage',$data);    
      } 

      $data = [
        'price' =>$request->price,
        'course' =>$request->course,
        'videos' =>$request->videos,
        'duration' =>$request->duration,
        'valeurAjeuter' =>$request->valeurAjeuter
      ]; 
      $this->saveProductPage($data); 
      return view('productPage',$data);      
    }

    public function saveProductPage($data){
      $_SESSION['ProductPage'] = $data; 
    }


}
