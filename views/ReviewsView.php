<div class="feedback"><p>Отзывы покупателей</p></div>
<? foreach($data as $reviews) { ?>
<div class="customer">
<img src="/views/image/otziv.png"/>
<div>
<h4><?=$reviews['name'];?> (<?=$reviews['city'];?>)</h4>
<p><?=$reviews['text'];?></p>
</div></div><?}?>
<form id="reviews" action="/reviews/addReviews" method="post">
<input type="text" class="addInp" placeholder="Имя *" name="reviewsName"><br><br>
	<input type="text" class="addInp" placeholder="Город *" name="reviewsCity"><br><br>
	<textarea name="reviewsText" placeholder="Текст *" id="addText"></textarea><br><br>
	<input type="submit" name="subRev" id="addBut" value="Оставить отзыв"><br><br>
</form>
