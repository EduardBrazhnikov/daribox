<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
if (!localStorage.getItem('local')) {
window.location.href = "https://daribox.com/admin";
		} 	
var yes = 1;
localStorage.setItem('local', yes); 
});	
</script>
<div style="background-color: #A9A9A9; height:100vh;"><div class="butAdmin"><input type="button" name="button"  id="butAddArticle" value="Изменить товар"/><input type="button" name="odin"  id="butChangeArticle" value="Одобрить отзывы"/><input type="button" name="button" id="goHome" value="Перейти на сайт" onclick="location.href = '/'"/><input type="button" name="button" id="goOut" value="Выход" onclick="location.href = '/out'"/><input type="button" name="button" id="goCabinet" value="Перейти в личный кабинет" onclick="location.href = 'https://web-time.com.ua/cabinet'"/></div>
 <div class="forma1">
 <? foreach($data as $reviews) { ?>
<div class="customer">
<img src="/views/image/otziv.png"/>
<div style="text-align: left;">
<h4><?=$reviews['name'];?> (<?=$reviews['city'];?>)</h4>
<p><?=$reviews['text'];?></p>
<form action="/admin/confirmReviews" method="post">
<input type="hidden" class="addInp" value="<?=$reviews['id'];?>" name="reviewsId">
<input type="submit" name="reviewsApprove" id="revButA" value="Одобрить">
</form>
<form action="/admin/reviewsDel" method="post">
<input type="hidden" class="addInp" value="<?=$reviews['id'];?>" name="reviewsIdDel">
<input type="submit" name="reviewsDel" id="revButD" value="Удалить">
</form>
</div></div><?}?>
</div>
<div class="forma2" style="background-color: #A9A9A9;">
<div class="results"></div>
<form action="/admin/changeProduct" method="post">
	<br>
	<h4>Внести изменения в раздел "Ограниченная серия"</h4><br>
	<hr><br><br>
	<input type="text" class="addInp" value="<?=$limited[3]['name'];?>" name="limName4"><br><br>
	<input type="text" class="addInp" value="<?=$limited[3]['price'];?>" name="limPrice4"><br><br>
	<input type="submit" name="sub2" id="addBut" value="Внести изменения"><br><br>
	<hr>
</form>
<form action="/admin/changePresent" method="post">
	<br>
	<h4>Внести изменения в раздел "Подарки"</h4><br>
	<hr><br><br>
	<input type="text" class="addInp" value="<?=$present[0]['name'];?>" name="presentName1"><br><br>
	<input type="text" class="addInp" value="<?=$present[0]['price'];?>" name="presentPrice1"><br><br>
	<input type="text" class="addInp" value="<?=$present[1]['name'];?>" name="presentName2"><br><br>
	<input type="text" class="addInp" value="<?=$present[1]['price'];?>" name="presentPrice2"><br><br>
	<input type="text" class="addInp" value="<?=$present[2]['name'];?>" name="presentName3"><br><br>
	<input type="text" class="addInp" value="<?=$present[2]['price'];?>" name="presentPrice3"><br><br>
	<input type="text" class="addInp" value="<?=$present[3]['name'];?>" name="presentName4"><br><br>
	<input type="text" class="addInp" value="<?=$present[3]['price'];?>" name="presentPrice4"><br><br>
	<input type="submit" name="sub3" id="addBut" value="Внести изменения"><br><br>
	<hr>
</form>
<form action="/admin/changeSweet" method="post">
	<br>
	<h4>Внести изменения в раздел "Сладости"</h4><br>
	<hr><br><br>
	<input type="text" class="addInp" value="<?=$sweet[0]['name'];?>" name="sweetName1"><br><br>
	<input type="text" class="addInp" value="<?=$sweet[0]['price'];?>" name="sweetPrice1"><br><br>
	<input type="text" class="addInp" value="<?=$sweet[1]['name'];?>" name="sweetName2"><br><br>
	<input type="text" class="addInp" value="<?=$sweet[1]['price'];?>" name="sweetPrice2"><br><br>
	<input type="text" class="addInp" value="<?=$sweet[2]['name'];?>" name="sweetName3"><br><br>
	<input type="text" class="addInp" value="<?=$sweet[2]['price'];?>" name="sweetPrice3"><br><br>
	<input type="text" class="addInp" value="<?=$sweet[3]['name'];?>" name="sweetName4"><br><br>
	<input type="text" class="addInp" value="<?=$sweet[3]['price'];?>" name="sweetPrice4"><br><br>
	<input type="submit" name="sub4" id="addBut" value="Внести изменения"><br><br>
	<hr>
</form>
<form action="/admin/changeMix" method="post">
	<br>
	<h4>Внести изменения в раздел "Микс"</h4><br>
	<hr><br><br>
	<input type="text" class="addInp" value="<?=$mix[0]['name'];?>" name="mixName1"><br><br>
	<input type="text" class="addInp" value="<?=$mix[0]['price'];?>" name="mixPrice1"><br><br>
	<input type="text" class="addInp" value="<?=$mix[1]['name'];?>" name="mixName2"><br><br>
	<input type="text" class="addInp" value="<?=$mix[1]['price'];?>" name="mixPrice2"><br><br>
	<input type="text" class="addInp" value="<?=$mix[2]['name'];?>" name="mixName3"><br><br>
	<input type="text" class="addInp" value="<?=$mix[2]['price'];?>" name="mixPrice3"><br><br>
	<input type="text" class="addInp" value="<?=$mix[3]['name'];?>" name="mixName4"><br><br>
	<input type="text" class="addInp" value="<?=$mix[3]['price'];?>" name="mixPrice4"><br><br>
	<input type="submit" name="sub5" id="addBut" value="Внести изменения"><br><br>
	<hr>
</form>
<form action="/admin/changeIntim" method="post">
	<br>
	<h4>Внести изменения в раздел "Интим"</h4><br>
	<hr><br><br>
	<input type="text" class="addInp" value="<?=$intim[0]['name'];?>" name="intimName1"><br><br>
	<input type="text" class="addInp" value="<?=$intim[0]['price'];?>" name="intimPrice1"><br><br>
	<input type="text" class="addInp" value="<?=$intim[1]['name'];?>" name="intimName2"><br><br>
	<input type="text" class="addInp" value="<?=$intim[1]['price'];?>" name="intimPrice2"><br><br>
	<input type="text" class="addInp" value="<?=$intim[2]['name'];?>" name="intimName3"><br><br>
	<input type="text" class="addInp" value="<?=$intim[2]['price'];?>" name="intimPrice3"><br><br>
	<input type="text" class="addInp" value="<?=$intim[3]['name'];?>" name="intimName4"><br><br>
	<input type="text" class="addInp" value="<?=$intim[3]['price'];?>" name="intimPrice4"><br><br>
	<input type="submit" name="sub6" id="addBut" value="Внести изменения"><br><br>
	<hr>
</form>
</div>
</div>

