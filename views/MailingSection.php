<h1 class="titleBlock2">Добро пожаловать!!!<br>Раздел отправки писем</h1>
<div class="regulations">
	<div class="rowLetter" >
		<p>Как быстро меняется наша жизнь, все течет, все меняется, но лучшее всегда возвращается. Так и с бумажной почтой. На протяжении многих веков это был единственный способ общения на расстоянии. Сто лет назад у нас появился телеграф и телефон. А потом наступила цифровая эра: интернет, а с ним электронная почта, потом скайп, соцсети, мессенджеры... и все это за последние 10-15 лет. Казалось бы, что бумажным письмам нет больше места, но это не так! Бумажные письма не конкуренты современным средствам связи, им не нужно передавать информацию, бумажные письма для передачи эмоций!</p><br><br>
		<p>Сегодня, если хочешь обидеть друга, поздравь его с днем рождения через Viber и WhatsApp. А если хочешь стать его врагом, поздравь через электронную почту или вконтакте:) Но если для тебя это действительно родной человек, только бумажные письма, и никак иначе! И главное помните, какое бы ни было поздравление, главное чтобы оно было сделано с душой.
DariBox прекрасно подойдет для этого, потому что мы отправляем бумажные письма в любую часть света. Вам всего лишь нужно заполнить поля, которые находятся ниже, а всё остальное мы сделаем за Вас. Попробуй!</p>
	</div>
</div>
<section class="envelope">
<h3>1. Заполните конверт</h3>
  <div class="allEnvelope">
    <div class="sender">
      <p>Адрес отправителя</p>
<form method="POST" id="form" action="/LiqPay/pay.php" accept-charset="utf-8">
<div class="mailingSender">
 <input type="text" class="mailingInp" placeholder="ФИО *" required="required" name="senderName"><br><br>
	<input type="text" class="mailingInp" placeholder="Улица, номер дома/квартиры *" required="required" name="senderStreet"><br><br>
      <input type="text" class="mailingInp" placeholder="Поселок/район/город *" required="required" name="senderCity"><br><br>
	    <input type="text" class="mailingInp" placeholder="Область *" required="required" name="senderRegion"><br><br>
		   <input type="text" class="mailingInp" placeholder="Страна *" required="required" name="senderCountry"><br><br>
	          <input type="text" class="mailingInp" placeholder="Индекс *" required="required" name="senderIndex"><br><br>
</div> 
    </div>
<img class="imgAbsolut" src="views/image/logo2.png"/>

 <div class="recipient">
   	
    <p>Адрес получателя</p>
<div class="mailingRecipient">
 <input type="text" class="mailingInp" placeholder="ФИО *" required="required" name="recipientName"><br><br>
	<input type="text" class="mailingInp" placeholder="Улица, номер дома/квартиры *" required="required" name="recipientStreet"><br><br>
      <input type="text" class="mailingInp" placeholder="Поселок/район/город *" required="required" name="recipientCity"><br><br>
	    <input type="text" class="mailingInp" placeholder="Область *" required="required" name="recipientRegion"><br><br>
		   <input type="text" class="mailingInp" placeholder="Страна *" required="required" name="recipientCountry"><br><br>
	          <input type="text" class="mailingInp" placeholder="Индекс *" required="required" name="recipientIndex"><br><br>
</div>
 </div>
        <img class="imgMarka" src="/img/marka.png"/>
  </div>
</section>
<section class="postcard">
<h3>2. Заполните открытку</h3>
  <div class="allotkritka">
    <div class="sender"></div>
      <div class="recipientotkritka">
      <input type="text" class="mailingInp" placeholder="Кому (пример: лучшему другу!) *" required="required" name="whom"><br><br>
            <input type="checkbox" name="myself" class="myselfText"><p>Написать текст самому</p>
	          <textarea rows="10" name="postcard" class="postcardText" placeholder="Текст на открытке"></textarea><br><br>
			    <input type="checkbox" name="our" class="ourText" value="да"><p>Наше поздравление</p><br><br>
				  <input type="text" class="mailingInp" placeholder="От кого (пример: Твой друг Сергей) *" required="required" name="from"><br><br>
      </div>
  </div>
<section class="payment">
<h3>3. Оплатите письмо</h3>
  <div class="allPayment">
    <div class="side2">
      <input type="checkbox" name="ukraine" value="35" checked="checked" class="locally"><p class="paymentText">По Украине</p><span class="priceСolor">35 грн</span><br><br>
	    <input type="checkbox" name="otherСountries" value="" class="abroad"><p class="paymentText">Другие страны</p><span class="priceСolor">160 грн</span><br><br>
	      <input type="text" class="mailingInp" placeholder="Номер телефона отправителя *" required="required" name="numberTelephon"><br><br>
               <input class="liqpayAmount" type="hidden" name="amount" value="35"/> 
               <input type="image" src="//static.liqpay.ua/buttons/p1ru.radius.png"/> 
</form>
        </div>
  </div> 
</section>