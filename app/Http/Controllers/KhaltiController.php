<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Carbon\Carbon;
use App\Khalti;
use App\MyBook;
use Auth;

class KhaltiController extends Controller
{
    public function transaction(Request $request)
    {
    	
    		$product_identity=$request->input('product_identity');
    		$mobile= $request->input('mobile');
         	$amount= ($request->input('amount')/100.00);
    		$pre_token=$request->input('token');

            $user_id=Auth::user()->id;
           

           //before verification for reference purposes
            $khalti=new Khalti; 
            $khalti->user_id= $user_id;
            $khalti->mobile=$mobile;
            $khalti->amount=$amount;
            $khalti->pre_token=$pre_token;
            $khalti->product_identity=$product_identity;
            $khalti->status=0;
            $khalti->verified_token="null";
            $khalti->save();

        if($khalti){
            $insertID=$khalti->id;//get recent inserted data id;
            //now everything is okay for verification process
            //hit api for verification
            $args = http_build_query(array(
                        'token' => $pre_token,
                        'amount'  => ($amount*100)
                    ));
            $url = "https://khalti.com/api/v2/payment/verify/";
            # Make the call using API.
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS,$args);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $headers = ['Authorization: Key '.env('KHALTI_TEST_SECRET', '')];
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            // Response
            $response = curl_exec($ch);
            $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            $token = json_decode($response, TRUE);
          
          
                if(isset($token['idx']) && $status_code == 200){

                    //$message="Don't Worry! Everything Fine";  
                    $message=$token['idx']; 

                    //updating previous khalti table data with success status and verified_token
                    $khaltiUpdate=Khalti::find($insertID);
                    $khaltiUpdate->status=1;
                    $khaltiUpdate->verified_token=$token['idx'];
                    $khaltiUpdate->save();

                        if($khaltiUpdate){
                        //inserting into the mybook table for the purchased entry for book
                        $MyBook=new MyBook;
                        $MyBook->user_id=$user_id;
                        $MyBook->book_id=$product_identity;
                        $MyBook->trans_idx=$token['idx'];
                        $MyBook->trans_amount=$amount;
                        $MyBook->save();
                        }
                        else{
                            $message="Data Insertion Failed. Contact to the Authorized Person";
                        }       

                }
                else{
                    $message="Verification Failed!! Contact to the Authorized Person";
                }

            }
        else{
            $message="Something Happened";
        }
          
         return response([
                'message' =>$message,
            ]);
     
    }
  
    public function nulltest(){

        $message="Okay done";
         return response([
                'message' =>$message,
            ]);
    }

}