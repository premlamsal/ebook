@extends('layout.app')
@section('PageContent')
<div class="container">
	<div class="row">
		<div class="col-md-12" style="margin-top: 100px; margin-bottom: 100px">

    @if(empty($nackH1))
			
			<div class="row">
				<div class="col-md-3">
					<img src="../storage/Book_image/{{$book->image}}" class="buy-book-img">
				</div>
				<div class="col-md-6">
                    <h2>You are about to buy</h2>
					<h3 style="font-weight: bold;"> {{$book->title}}</h3>
					<p style="font-size: 18px">Rs.{{$book->price}} </p>
					<p>Author/s: {{$book->author}}</p>

                    <div class="khalti-block">
					<!-- Place this where you need payment button -->
				    <button id="payment-button" style="background-color: #773292;cursor: pointer;color: #fff;border: none;padding: 5px 10px;border-radius: 2px;" class="paybtn">Buy with <img src="{{URL::asset('img/khalti-big-white.png')}}"></button>
				    <!-- Place this where you need payment button -->
                    <!-- esewa api block -->
                </div>
                   <div class="esewa-block">
                     <form action="{{ env('ESEWA_URL') }}" method="POST" id="esewa-form">

                        @csrf
                        <input value="{{$book->price}}" name="tAmt" type="hidden">
                        <input value="{{$book->price}}" name="amt" type="hidden">
                        <input value="0" name="txAmt" type="hidden">
                        <input value="0" name="psc" type="hidden">
                        <input value="0" name="pdc" type="hidden">
                        <input value="{{ env('ESEWA_MERCHANT') }}" name="scd" type="hidden">
                        <input value="{{$pidTimeStamp}}" name="pid" type="hidden">
                        <input value="{{ env('APP_URL') }}/verifyEsewa" type="hidden" name="su">
                        <input value="{{ env('APP_URL') }}/failedEsewa" type="hidden" name="fu">
                        <button id="esewaBtn" class="btn btn-success paybtn">Buy with<img src="{{URL::asset('img/esewa-big-white.png')}}"></button>
                    </form>

                    <!-- esewa api block ends -->
                   </div>
				</div>
			</div>
	@else
    <h2>{{$nackH1}}</h2>
    <p>{{$nackP}}</p>
    @endif

		</div>
	</div>
</div>


@endsection
@section('PageScripts')

@if(empty($nackH1))
<script type="text/javascript">
        var config = {
            // replace the publicKey with yours
            "publicKey": "{{env('KHALTI_TEST_PUBLIC', '')}}",
            "productIdentity": "{{$book->id}}",
            "productName": "{{$book->title}}",
            "productUrl": "{{$url}}/book/{{$book->id}}",
            "eventHandler": {
                onSuccess (payload) {
                    // hit merchant api for initiating verfication
                    
                    $.ajax({
                        url: '{{url("khalti/verification")}}',
                        type: 'post',
                        data: {
                            'amount': payload.amount,
                            'mobile': payload.mobile,
                            'product_identity': payload.product_identity,
                            'token': payload.token
                            },
                        success: function(data) 
                        {

                               
                          //       notify({
                          //           type: "success", //alert | success | error | warning | info
                          //           title: "Hurray!!",
                          // position: {
                          //               x: "right", //right | left | center
                          //               y: "top" //top | bottom | center
                          //           },
                          //           icon: '<img src="/images/paper_plane.png" />',
                          //           autoHide: true, //true | false
                          //           delay: 2500, //number ms
                          //           message: "You have successfully bought this Book."
                          //       });
                            console.log(data);
                            //redirect to customer profile
                             // window.location = "/customer/profile";
                             
                        },
                        error: function(data) 
                        {
                            console.log("error occured");
                          //redirext to error page
                        }
                   });
                },
                onError (error) {
                    console.log(error);
                    //redirect as needed
                },
                onClose () {
                    console.log('widget is closing');
                    //redirect as needed
                }
            }
        };
        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function (e) {
            e.preventDefault();
         var amount = "{{$book->price}}" *100;   
         checkout.show({amount: amount});
        }

   </script>
<script type="text/javascript">
        $(document).ready(function(){
            $("#esewaBtn").click(function(){        
                $("#esewa-form").submit(); // Submit the form
            });
        });
</script>
   @endif
@endsection