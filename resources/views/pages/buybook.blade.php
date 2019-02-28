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
 var price="{{$book->price}}"*100;
 var book_id="{{$book->id}}";
 var error2;
 price=1000;
 var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_0bf500d3a44e4200a7f7a1dc4d40d6e0",
            "productIdentity": "{{$book->id}}",
            "productName": "{{$book->title}}",
            "productUrl": "{{$url}}/book/{{$book->id}}",
            "amount":price,
            "eventHandler": {
                onSuccess (payload) {
                    // hit merchant api for initiating verfication
                     // console.log(payload);
                      verifyPayment(payload);

                    
                },
                onError (error) {
                    // console.log(error);
                   
                },
                onClose () {
                    console.log('widget is closing');
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function () {
            checkout.show();
        }

 function verifyPayment(payload){
 
 		            $.ajax({
                        type : 'post',
                        url : '{{url("verifyPayment")}}',
                        data:{'payload':payload,'book_id':book_id},
                        success:function(result){
                        message=result.message
                          alert(message);
                        }


                    });


 }
</script>
@endsection