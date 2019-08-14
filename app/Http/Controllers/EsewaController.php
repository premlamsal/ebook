<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Esewa;
use App\MyBook;

class EsewaController extends Controller
{

   public function verifyEsewa(Request $request){

   		$refId=$request->get('refId');
   		$productId=$request->get('oid');
   		//retriving the actual price of the product to verify the transaction
   		$ActualPrice= Book::where('id',$oid)->value('price');

   			if($ActualPrice){	
		   		$user_id=Auth::user()->id;

		   		 //before verification for reference purposes
		            $Esewa=new Esewa; 
		            $Esewa->user_id= $user_id;
		            $Esewa->amt=$amount;
		            $Esewa->refId=$refId;
		            $Esewa->oid=$oid;
		            $Esewa->status=0;//will set to 1 if the transaction verified
		            $Esewa->save();


		            if($Esewa){

		            	$insertID=$Esewa->id;//picking the inserted data id for updating row later on after verification process

						//verification process starts
						$url = env('ESEWA_VERIFY_URL','');
						$data =[
						    'amt'=> $ActualPrice,
						    'rid'=> $refId,
						    'pid'=> $productId,
						    'scd'=> env('ESEWA_MERCHANT','')
						];

						    $curl = curl_init($url);
						    curl_setopt($curl, CURLOPT_POST, true);
						    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
						    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
						    $response = curl_exec($curl);
						    curl_close($curl);

						    if($response){
						    	//parsing xml from the response 
						         $parResponse = simplexml_load_string($response);
						         $response_code=$parResponse['response_code'];
						         if($response_code=='Success'){

						         	//fininf the row of previously inserted data for update
						         	$EsewaUpdate=Esewa::find($insertID);
					                $EsewaUpdate->status=1;
					                $EsewaUpdate->save();

					                	if($EsewaUpdate){

					                	    $MyBook=new MyBook;
					                        $MyBook->user_id=$user_id;
					                        $MyBook->book_id=$productId;
					                        $MyBook->trans_idx='esewaTransc';
					                        $MyBook->trans_amount=$ActualPrice;
					                        $MyBook->save();
					                        	if($MyBook){
					                        		//redirect to customer book panel after successfull verification
					                        		return redirect('/customer/profile');
					                        	}
					                        	else{
					                        		print_r("MyBook Injection Failed. Contact Administator")
					                        	}

					                	}
					                	else{
					                		print_r("Updating transaction Failed after success verification");
					                	}
						         }
						         else{
						         	print_r("verification failed");
						         }

						    }

						    else{
						    	print_r("Couldn't get response from server");
						    }


			        }
			        else{
			        	print_r("Opps!! Something got stuck in my neck.")
			        }






   			}
   		
   			else{

   				 return abort(404);
   			}
   		
   	// 	$amt=$request->get('amt');


   	}

   public function failed(){

   	return view('pages.esewafailed');
   }

}
