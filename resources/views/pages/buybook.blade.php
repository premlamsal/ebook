@extends('layout.app')
@section('PageContent')
<div class="container">
	<div class="row">
		<div class="col-md-12" style="margin-top: 10px; margin-bottom: 20px">
			<h2>You are about to buy</h2>
			<div class="row">
				<div class="col-md-3">
					<img src="../storage/Book_image/{{$book->image}}">
				</div>
				<div class="col-md-6">
					<h3> {{$book->title}}</h3>
					<p>Rs.{{$book->price}} </p>
					<p>Author/s: {{$book->author}}</p>
					<!-- Place this where you need payment button -->
				    <button id="payment-button" style="background-color: #773292;cursor: pointer;color: #fff;border: none;padding: 5px 10px;border-radius: 2px;">Buy with Khalti</button>
				    <!-- Place this where you need payment button -->
				</div>
			</div>
			
		</div>
	</div>
</div>


@endsection
@section('PageScripts')
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
                    console.log(payload);
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
                            console.log(data);
                             
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
@endsection