@extends('layout.app')
@section('PageContent')
<div class="container">
	<div class="row">
		<div class="col-md-12" style="margin-top: 10px; margin-bottom: 20px">

    @if(empty($nackH1))
			<h2>You are about to buy</h2>
			<div class="row">
				<div class="col-md-3">
					<img src="../storage/Book_image/{{$book->image}}">
				</div>
				<div class="col-md-6">
					<h3> {{$book->title}}</h3>
					<p>Rs.{{$book->price}} </p>
					<p>Author/s: {{$book->author}}</p>

                    <div class="khalti-block">
					<!-- Place this where you need payment button -->
				    <button id="payment-button" style="background-color: #773292;cursor: pointer;color: #fff;border: none;padding: 5px 10px;border-radius: 2px;">Buy with Khalti</button>
				    <!-- Place this where you need payment button -->
                    <!-- esewa api block -->
                </div>
                   <div class="esewa-block">
                     <form action="{{ env('ESEWA_URL') }}" method="POST">
                        <input value="{{$book->price -9}}" name="tAmt" type="hidden">
                        <input value="{{$book->price -9}}" name="amt" type="hidden">
                        <input value="0" name="txAmt" type="hidden">
                        <input value="0" name="psc" type="hidden">
                        <input value="0" name="pdc" type="hidden">
                        <input value="{{ env('ESEWA_MERCHANT') }}" name="scd" type="hidden">
                        <input value="laravelmakalu1" name="pid" type="hidden">
                        <input value="{{ env('APP_URL') }}/buy/verify" type="hidden" name="su">
                        <input value="{{ env('APP_URL') }}/buy/failed" type="hidden" name="fu">
                        <input value="Buy with Esewa" type="submit" class="btn btn-success">
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

                               
                                notify({
                                    type: "success", //alert | success | error | warning | info
                                    title: "Hurray!!",
                          position: {
                                        x: "right", //right | left | center
                                        y: "top" //top | bottom | center
                                    },
                                    icon: '<img src="/images/paper_plane.png" />',
                                    autoHide: true, //true | false
                                    delay: 2500, //number ms
                                    message: "You have successfully bought this Book."
                                });
                            // console.log(data);
                            //redirect to customer profile
                             window.location = "/customer/profile";
                             
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
   @endif
@endsection