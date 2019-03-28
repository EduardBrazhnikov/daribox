<h2 class="titleBlock">ВЫБЕРИТЕ ТИП ПОДАРКА</h2>
<div class="circleNav">
<div class="present"><div class="circlePresent" style="border: 10px solid #006400; background-color: #228B22;"><img src="/views/image/box_sm.png"/></div><p class="circleText1">ПОДАРКИ</p>
<button type="submit" id ="buttonPresent">Что внутри?</button></div>
<div class="sweets"><div class="circleSweets"><img src="/views/image/sweets.png"/></div><p class="circleText2">СЛАДОСТИ</p>
<button type="submit" id ="buttonSweets">Что внутри?</button></div>
<div class="mix"><div class="circleMix"><img src="/views/image/mix.png"/></div><p class="circleText3">МИКС</p>
<button type="submit" id ="buttonMix">Что внутри?</button></div>
<div class="intim"><div class="circleIntim"><img src="/views/image/Darintim.png"/></div><p class="circleText4">ИНТИМ</p>
<button type="submit" id ="buttonIntim">Что внутри?</button></div>
</div>
<div id="overlayP"><div class="popupPresent"><h3 style="margin-bottom: 1em;">Подарки</h3><hr>
<div class="whatPresent">
<div class="leftPresent">
<img class="imgC" src="/views/image/box_sm.png"/></div>
<div class="rightPresent">
<p>В боксах этой категории, Вы найдете массу интересных, полезных и трендовых предметов!</p>
<p>Внутри бывает много маленьких подарков либо несколько дорогих предметов, либо же все вместе, в зависимости от дороговизны бокса.</p>
</div></div>
<div class="popup__closeP">X</div></div></div>
<div id="overlayS"><div class="popupSweets"><h3 style="margin-bottom: 1em;">Сладости</h3><hr>
<div class="whatPresent">
<div class="leftPresent">
<img class="imgC" src="/views/image/sweets.png"/></div>
<div class="rightPresent">
<p>В боксах этой категории, Вы найдете вкусняшки со всего мира: американские, европейские и даже японские!</p>
<p>Внутри попадаются сладости, напитки и другие съедобные штуки!</p>
<p>Обычно, Вы не встретите наших нямок на прилавках магазинов.</p>
<p><b>Осторожно!</b> – Может слипнуться... :)</p>
</div></div>
<div class="popup__closeS">X</div></div></div>
<div id="overlayM"><div class="popupMix"><h3 style="margin-bottom: 1em;">Микс</h3><hr>
<div class="whatPresent">
<div class="leftPresent">
<img class="imgC" src="/views/image/mix.png"/></div>
<div class="rightPresent">
<p>В боксах этой категории совмещены "Подарки" и "Сладости".</p>
<p>Комбо, для тех, кто хочет получить крутые предметы и попробовать наши лучшие вкусняшки!</p>
<p>Внутри попадаются 50% предметов и 50% сладостей.</p>
</div></div>
<div class="popup__closeM">X</div></div></div>
<div id="overlayI"><div class="popupIntim"><h3 style="margin-bottom: 1em;">Интим</h3><hr>
<div class="whatPresent">
<div class="leftPresent">
<img class="imgC" src="/views/image/Darintim.png"/></div>
<div class="rightPresent">
<p>В боксах этой категории, Вы найдете интимные игрушки для взрослых.</p>
<p>Наши недетские игрушки не только скрасят ваше одиночество но и разнообразят семейную жизнь.</p>
<p>Порадуйте себя или близких интимным сюрпризом.</p>
</div></div>
<div class="popup__closeI">X</div></div></div>
<h2 class="titleBlock">ВЫБЕРИТЕ ЦЕНОВУЮ КАТЕГОРИЮ</h2>
<div class="product">
  <div class="vkl1"><span class="css-tag"><span class="css-tag1"><?=$present[0]['price'];?></span> грн</span><img class="picture" src="/views/image/box_sm.png"/><p class="textBox"><span class="textBox1"><?=$present[0]['name'];?></span></p><p class="order1">ЗАКАЗАТЬ</p><div class="triangle-down1"></div></div>
  <div class="vkl2"><span class="css-tag"><span class="css-tag2"><?=$present[1]['price'];?></span> грн</span><img class="picture" src="/views/image/box_sm.png"/><p class="textBox"><span class="textBox2"><?=$present[1]['name'];?></span></p><p class="order2">ЗАКАЗАТЬ</p><div class="triangle-down2"></div></div>
  <div class="vkl3"><span class="css-tag"><span class="css-tag3"><?=$present[2]['price'];?></span> грн</span><img class="picture" src="/views/image/box_sm.png"/><p class="textBox"><span class="textBox3"><?=$present[2]['name'];?></span></p><p class="order3">ЗАКАЗАТЬ</p><div class="triangle-down3"></div></div>
  <div class="vkl4"><span class="css-tag"><span class="css-tag4"><?=$present[3]['price'];?></span> грн</span><img class="picture" src="/views/image/box_sm.png"/><p class="textBox"><span class="textBox4"><?=$present[3]['name'];?></span></p><p class="order4">ЗАКАЗАТЬ</p><div class="triangle-down4"></div></div>
</div>
<div class="contentBox">
<div class="box1">
<div class="imgBox">
<img class="onePicture" src="/views/image/box_sm.png"/>
</div>
<div class="nameBox"><h1 id="nameBox"><?=$present[0]['name'];?></h1><p id="price"><span id="cost"><?=$present[0]['price'];?></span> грн</p>
<form method="post" id="box">
<div class="radio_buttons">
    <div class="hi2">
        <input type="radio" name="option" id="radio1" value="ОН" checked />
        <label for="radio1">&#9794; <span>ОН</span></label>
    </div>
    <div class="she2">
        <input type="radio" name="option" id="radio2" value="ОНА"/>
        <label for="radio2">&#9792; <span>ОНА</span></label>
    </div>
    <div class="they2">
        <input type="radio" name="option" id="radio3" value="ПАРА" />
        <label for="radio3">&#9791; <span>ПАРА</span></label>
    </div>
</div><br><br><br>
      <span style="color: red; float: left; padding-right: 1em; margin-bottom: 0.5em">*</span><p style="margin-bottom: 0.5em;">возраст получателя</p>
	  <select id="sortSel" name="age">
	<option value="6-9">6-9</option>
    <option value="10-13">10-13</option>
    <option value="14-17">14-17</option>
	<option value="18-21">18-21</option>
	<option value="22-25">22-25</option>
	<option value="26-29">26-29</option>
	<option value="30">30 и старше</option>
    </select><br>
	<input type="checkbox" name="public" id="public" value="yes"><p style="margin: 1em;">Добавить открытку с поздравлениями<span style="color: red;";>(+25 грн)</span></p>
	  <textarea rows="10" name="coment1" id="hide" placeholder="Текст на открытке" style="display: none; width: 100%; box-sizing: border-box;";></textarea><br><br>
      <button type="submit" id ="button1" class="button">Получить подарок</button>
</form>
</div>
</div>
</div>