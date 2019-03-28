<?php
$private_key = "************";
$public_key = "*************";
if(isset($_POST['amount'])){
$amount = $_POST['amount'];
}
else {
header("Location: /mail");
exit;
}
$json_string = json_encode(
array(
"version" => "3",
"public_key" => $public_key, 
"amount" => $amount,
"action" => "pay", 
"currency" => "UAH",
"description" => "Оплата письма", 
"type" => "buy",
"order_id" => date("d/m/Y-H:i:s"),
"server_url" => "https://daribox.com/",
"result_url" => "https://daribox.com/LiqPay/pay.php"
)
);
$data = base64_encode( $json_string );
$sign = base64_encode( sha1( 
$private_key .  
$data . 
$private_key 
, 1 ));
?>
<form method="POST" id="myform" action="/LiqPay/sendMail.php" accept-charset="utf-8">
<input type="hidden" name="sendM"/>
</form>
<div id="liqpay_checkout"></div>
<script src="/js/jquery-3.3.1.js" defer></script>
	<script>
	window.LiqPayCheckoutCallback = function() {
	    LiqPayCheckout.init({
			data: "<?echo $data?>",
			signature: "<? echo $sign?>",
			embedTo: "#liqpay_checkout",
			mode: "embed"
	    }).on("liqpay.callback", function(data){
			if (data.status == 'success') {
	        var mailLocalSt = localStorage.getItem('mail');
			var newM1 = mailLocalSt.replace(/"/g, '');
			var newM2 = newM1.replace(/,/g, '<br>');
			var newM3 = newM2.replace(/{/g, '');
			var newM4 = newM3.replace(/}/g, '');
			var newM5 = newM4.replace(/:/g, '');
			var newM6 = newM5.replace(/senderName/g, '');
			var newM7 = newM6.replace(/senderStreet/g, '');
			var newM8 = newM7.replace(/senderCity/g, '');
			var newM9 = newM8.replace(/senderStreet/g, '');
			var newM10 = newM9.replace(/senderRegion/g, '');
			var newM11 = newM10.replace(/senderCountry/g, '');
			var newM12 = newM11.replace(/senderIndex/g, '');
			var newM13 = newM12.replace(/recipientName/g, '');
			var newM14 = newM13.replace(/recipientStreet/g, '');
			var newM15 = newM14.replace(/recipientCity/g, '');
			var newM16 = newM15.replace(/recipientRegion/g, '');
			var newM17 = newM16.replace(/recipientCountry/g, '');
			var newM18 = newM17.replace(/recipientIndex/g, '');
			var newM19 = newM18.replace(/whom/g, '');
			var newM20 = newM19.replace(/postcard/g, '');
			var newM21 = newM20.replace(/fromInp/g, '');
			var newM22 = newM21.replace(/ukraine/g, 'Оплачено по Украине: ');
			var newM23 = newM22.replace(/otherСountries/g, '');
			var newM24 = newM23.replace(/numberTelephon/g, '');
			var newM25 = newM24.replace(/recipientData/g, '<br>');
			var newM26 = newM25.replace(/postData/g, '<br>');
			$("input[name='sendM']").val(newM26);
			function sform(){
		    document.forms["myform"].submit();
	        }  
            sform();			 
			}
			else {document.write('<h1>Ошибка оплаты</h1>');}
	    }).on("liqpay.ready", function(data){
	    	// ready
	    }).on("liqpay.close", function(data){
	    	// close
	    });
	};
	</script>
	<script src="//static.liqpay.ua/libjs/checkout.js" async></script>
