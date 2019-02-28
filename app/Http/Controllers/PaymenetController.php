<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class PaymenetController extends Controller
{
    public function verifyPayment(Request $request){
        //get book id from ajax call
        $book_id=$request->book_id;
        //get book actual price from database
        $price=Book::find($book_id)->value('price');
        //get josn data from ajax call to verify payment
        $payload=$request->payload;
        //decoding json data to standard array format
        $payload=json_decode($payload);

        //assign decoded json data to the variables 
        $idx=$payload->token;
        $token=$payload->token;
        $amount=$payload->amount;
        $mobile=$payload->mobile;
        $product_url=$payload->product_url;
        $product_name=$payload->product_name;
        $product_identity=$payload->product_identity;
       


        $args = http_build_query(array(
            'token' => $token,
            'amount'  => $amount
        ));

        $url = "https://khalti.com/api/v2/payment/verify/";

        # Make the call using API.
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$args);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $headers = ['Authorization: Key test_secret_key_af69eb19f21d4b50ba5cd7c768200c2d'];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // Response
        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        //khalti api codes for payment verification

        $verResponse=json_decode($response);
        if($verResponse->token)//token will initailize only when verification failed
        {
              print_r("Sorry!! Transaction can't complete or Verification failed");
           
        }
        else{
            //accessing json one by one
            $idx=$verResponse->idx;
            //get trasncation type and name
            $type_idx=$verResponse->type['idx'];
            $type_name=$verResponse->type['type_name'];

            //get transcation state i.e completed or not
            $state_idx=$verResponse->state['idx'];
            $state_name=$verResponse->state['name'];
            $state_template=$verResponse->state['template'];

            //get amount, fee_amount,date,ebanker datas
            $amount=$verResponse->amount;
            $fee_amount=$verResponse->fee_amount;
            $refunded=$verResponse->refunded;
            $created_on=$verResponse->created_on;
            $ebanker=$verResponse->ebanker;

            //get user details
            $user_idx=$verResponse->user['idx'];
            $user_name=$verResponse->user['name'];
            $user_mobile=$verResponse->user['mobile'];

            //get merchant details
            $merchant_idx=$verResponse->merchant['idx'];
            $merchant_name=$verResponse->merchant['name'];
            $merchant_mobile=$verResponse->merchant['mobile'];
           
            //will store sucess repsone to the database for futher use.




             print_r("Thanks for Buying this Boook");
        }
       
    }
}
