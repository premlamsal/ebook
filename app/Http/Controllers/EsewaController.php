<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Esewa;
use App\MyBook;
use Auth;

class EsewaController extends Controller
{

   public function verifyEsewa(Request $request){

   	  	$refId=$request->get('refId');
   		$productId=$request->get('oid');
   		$amount=$request->get('amt');
   		//retriving the actual price of the product to verify the transaction
   		$ActualPrice= Book::where('id',$productId)->value('price');

   			if($ActualPrice){	
		   		$user_id=Auth::user()->id;

		   		 //before verification for reference purposes
		            $Esewa=new Esewa; 
		            $Esewa->user_id= $user_id;
		            $Esewa->amt=$amount;
		            $Esewa->refId=$refId;
		            $Esewa->oid=$productId;
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

						   $insertID=$Esewa->id;//picking the inserted data id for updating row later on after verification process
						  
						    $verification_response  = strtoupper( trim( strip_tags( $response ) ) ) ;

						    	if('SUCCESS' == $verification_response){
							    // echo '<h2><strong>SUCCESS:</strong> Transaction is successful !!!</h2>';

								 // find the row of previously inserted data for update
						  		 $EsewaUpdate=Esewa::find($insertID);
					             $EsewaUpdate->status=1;
					             $EsewaUpdate->save();

					             if($EsewaUpdate){

					             	$actualPid = explode("Z", $productId);//spliting the actual product id 

					                $MyBook=new MyBook;
									$MyBook->user_id=$user_id;
									$MyBook->book_id=$actualPid[0];
									$MyBook->trans_idx=$refId;
									$MyBook->trans_amount=$ActualPrice;
									$MyBook->save();
											if($MyBook){
												return redirect('customer/profile');
											}
											else{
													print_r("Error While Adding Book.Contact Makalu Publication for more information.");
											}
					                 }

					                 else{
					                 	print_r("Error While Updating Status of Book.Contact Makalu Publication for more information.");
					                 }

					         }

					         else{
					         	print_r("Couldn't verify the Transaction.Contact Makalu Publication for more information.");//end of verification for success
					         }

		            }

		            else{
		            	print_r("Error Saving Transaction Data. Contact Makalu Publication for more information.");//end of esewa
		            }

		        }

		      else{
		      	print_r("Something Went Wrong!!.Contact Makalu Publication for more information.");//end of actual price
		      }
   		
   		}

   public function failed(){

   	return view('pages.esewafailed');
   }

}
