<div class="rowAnswer">
	<div class="blockArea">
<img class="arrow" alt="левая стрелка" src="/views/image/arrowR.gif"/>
<div class="area">Подробнее <div class="first">&#10144;</div></div>
<div class="imgQuestion" id="question"><img alt="вопрос" src="/views/image/question1.png"/></div>
<div class="area"><div class="rotatable">&#10144;</div> Подробнее</div>
<img class="arrow2" alt="правая стрелка" src="/views/image/arrowR.gif"/>
	</div>
	<div class="txtAnswer" id="answer">
		<p>Дорогие друзья, наша компания сделает все за вас, в плане выборов подарков для любого возраста. Теперь вам не придется долго подбирать подарок себе, друзьям и близким. Это подарки, которые будут незабываемые для получателя. В общем, смысл очень прост, вы не знаете, что находится внутри бокса и в этом сам сюрприз. Вы заказываете коробочку из определенной категории боксов, выбираете цену, параметры получателя, все остальное мы сделаем за Вас.</p><br><br>
		<p>Мы проделали большую работу, чтобы предоставить лучший сервис и условия нашим клиентам.
		Теперь вам не придётся тратить свое драгоценное время на бесконечные поиски подарков. Не знаете, что подарить своим друзьям, близким и знакомым? Тогда спешите к нам. Мы с душой и любовью подберем идеальные подарки за вас, упакуем в нашу фирменную упаковку и доставим Новой Почтой по всей Украине.</p>
	</div>
</div>
<div id="block-for-slider">
        <div id="viewport">
            <ul id="slidewrapper">
                <li class="slide">
				<iframe width="500" height="350" src="https://www.youtube.com/embed/r4XXF4ZpMgE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</li>
                <li class="slide">
				<iframe width="500" height="350" src="https://www.youtube.com/embed/jFaygsPYkgs?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</li>
                <li class="slide">
				<iframe width="500" height="350" src="https://www.youtube.com/embed/r4XXF4ZpMgE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</li>
                <li class="slide">
				<iframe width="500" height="350" src="https://www.youtube.com/embed/jFaygsPYkgs?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</li>
            </ul>
            <div id="prev-next-btns">
                <div id="prev-btn">&lt;</div>
                <div id="next-btn">&gt;</div>
            </div>
            <ul id="nav-btns">
                <li class="slide-nav-btn"></li>
                <li class="slide-nav-btn"></li>
                <li class="slide-nav-btn"></li>
                <li class="slide-nav-btn"></li>
            </ul>
        </div>
    </div>
<a href="/video"><div class="AllVideo">Больше видео</div></a>
<div class="titleBox"><p>ОГРАНИЧЕННАЯ СЕРИЯ</p></div>
<div class="contentBox">
<div class="before"></div>
<div class="box1">
<div class="imgBox">
<img class="onePicture" alt="подарки" src="/views/image/box_sm.png"/>
<div class="descriptionBox"><?=$limited[3]['text'];?></div>
</div>
<div class="nameBox"><h1 id="nameBox"><?=$limited[3]['name'];?></h1><p id="price"><span id="cost"><?=$limited[3]['price'];?></span> грн</p>
<form method="post" id="box">
<div class="radio_buttons">
    <div class="she1">
        <input type="radio" name="option" id="radio2" value="ОНА" checked />
        <label for="radio2">&#9792; <span>ОНА</span></label>
    </div>
</div><br><br><br>
<span style="color: red; float: left; padding-right: 1em; margin-bottom: 0.5em">*</span><p style="margin-bottom: 0.5em;">возраст получателя</p>
	<select id="sortSel" name="age">
	<option value="17-21">17-21</option>
	<option value="22-25">22-25</option>
	<option value="26-29">26-29</option>
	<option value="30">30 и старше</option>
    </select><br>
<input type="checkbox" name="public" id="public" value="yes"><p style="margin: 1em;">Добавить открытку с поздравлениями<span style="color: red;">(+25 грн)</span></p>
<textarea rows="10" name="coment1" id="hide" placeholder="Текст на открытке" style="display: none; width: 100%; box-sizing: border-box;"></textarea><br><br>
<button type="submit" id ="button1" class="button">Получить подарок</button>
</form>
</div>
</div>
<div class="after"></div>
</div>
<h2 class="titleBlock2">ВЫБЕРИТЕ ДРУГОЙ ВИД СЮРПРИЗ ПОДАРКА</h2>
<div class="circleNav">
<div class="present"><div class="circlePresent"><img alt="подарки" src="/views/image/box_sm.png"/></div><p class="circleText1">ПОДАРКИ</p>
<button type="submit" id ="buttonPresent">Что внутри?</button></div>
<div class="sweets"><div class="circleSweets"><img alt="сладости" src="/views/image/sweets.png"/></div><p class="circleText2">СЛАДОСТИ</p>
<button type="submit" id ="buttonSweets">Что внутри?</button></div>
<div class="mix"><div class="circleMix"><img alt="микс" src="/views/image/mix.png"/></div><p class="circleText3">МИКС</p>
<button type="submit" id ="buttonMix">Что внутри?</button></div>
<div class="intim"><div class="circleIntim"><img alt="интим" src="/views/image/Darintim.png"/></div><p class="circleText4">ИНТИМ</p>
<button type="submit" id ="buttonIntim">Что внутри?</button></div>
</div>
<div id="overlayP"><div class="popupPresent"><h3 style="margin-bottom: 1em;">Подарки</h3><hr>
<div class="whatPresent">
<div class="leftPresent">
<img class="imgC" alt="подарки" src="/views/image/box_sm.png"/></div>
<div class="rightPresent">
<p>В боксах этой категории, Вы найдете массу интересных, полезных и трендовых предметов!</p>
<p>Внутри бывает много маленьких подарков либо несколько дорогих предметов, либо же все вместе, в зависимости от дороговизны бокса.</p>
</div></div>
<div class="popup__closeP">X</div></div></div>
<div id="overlayS"><div class="popupSweets"><h3 style="margin-bottom: 1em;">Сладости</h3><hr>
<div class="whatPresent">
<div class="leftPresent">
<img class="imgC" alt="сладости" src="/views/image/sweets.png"/></div>
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
<img class="imgC" alt="микс" src="/views/image/mix.png"/></div>
<div class="rightPresent">
<p>В боксах этой категории совмещены "Подарки" и "Сладости".</p>
<p>Комбо, для тех, кто хочет получить крутые предметы и попробовать наши лучшие вкусняшки!</p>
<p>Внутри попадаются 50% предметов и 50% сладостей.</p>
</div></div>
<div class="popup__closeM">X</div></div></div>
<div id="overlayI"><div class="popupIntim"><h3 style="margin-bottom: 1em;">Интим</h3><hr>
<div class="whatPresent">
<div class="leftPresent">
<img class="imgC" alt="интим" src="/views/image/Darintim.png"/></div>
<div class="rightPresent">
<p>В боксах этой категории, Вы найдете интимные игрушки для взрослых.</p>
<p>Наши недетские игрушки не только скрасят ваше одиночество но и разнообразят семейную жизнь.</p>
<p>Порадуйте себя или близких интимным сюрпризом.</p>
</div></div>
<div class="popup__closeI">X</div></div></div>
<div class="instagram">
<div class="insta"><p>instagram <img class="instaImg" alt="instagram" src="/views/image/instagram-black.png"/> daribox.com</p></div>
<div class="insight-instagram-wrap">
<script src="https://snapwidget.com/js/snapwidget.js"></script>
<iframe src="https://snapwidget.com/embed/661930" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>
</div></div>
<div class="reviews">
<div class="feedback"><p>Отзывы покупателей</p></div>
<? foreach($data as $reviews) { ?>
<div class="customer">
<img alt="отзывы" src="/views/image/otziv.png"/>
<div>
<h4><?=$reviews['name'];?> (<?=$reviews['city'];?>)</h4>
<p><?=$reviews['text'];?></p>
</div></div><?}?>
<div class="allButtonReviews">
<a href="/reviews#reviews"><div class="buttonReviews">Оставить отзыв</div></a>
<a href="/reviews"><div class="buttonReviews">Смотреть все</div></a>
</div>
</div>
<div class="titleBeforeFooter"><p>Daribox - cамая крупная компания сюрприз-подарков в Украине</p></div>
<div class="textBeforeFooter">
<p>Дорогие друзья, наша компания сделает все за вас, в плане выборов подарков для любого возраста. 
Теперь вам не придется долго подбирать подарок себе, друзьям и близким. Все это мы сделаем за вас. 
Это подарки, которые будут незабываемые для получателя. В общем, смысл очень прост, вы не знаете, 
что находится внутри бокса и в этом сам сюрприз.</p>
</div>



