<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:image" content="/views/image/logo3.jpg"/>
    <meta name="description" content="Сюрприз Бокс, подарочные сюрпризы в Украине! Daribox – это оригинальные и трендовые подарки, а так же крутые гаджеты. Незабываемые эмоции внутри каждого бокса! :)" />
	<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Underdog" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=ZCOOL+KuaiLe" rel="stylesheet">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" type="text/css" href="/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="/css/component.css" />
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/views/image/logo2.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/views/image/logo2.png"/>
	<script>function recaptcha(){
    $('#logBut').attr('type','submit');
	$('#logBut2').attr('type','hidden');
	}
    </script>
    <meta name="msapplication-square70x70logo" content="/views/image/logo2.png"/>
    <title>Daribox - Сервис случайных подарков, Сюрприз Бокс в Украине</title>  
</head>
<body>
<header class="header">
<div class="butM">&equiv;</div>
<div class="mailbut"><a href="/mail"><img alt="maildaribox" src="/img/mailbut.gif"/>
</a></div>
<div class="basketCircle"></div>
<div class="basket"><img alt="корзина покупок" src="/views/image/basket.png"/></div>
<div id="overlay">
<div class="popup">
<div class="popup__close">X</div>
<div class="rowBasket">
<div class="orderBasket">
<h4>Оформление заказа</h4>
<form method="post" id="formMain" action="/order" name="formMain">
<input class="logInp" type="text" name="userName" maxlength="20" required="required" placeholder="Имя *"><br><br>
<input class="logInp" type="text" name="userSurname" maxlength="30" required="required" placeholder="Фамилия *"><br><br>
<input class="logInp" type="text" name="userPhone" maxlength="13" required="required" placeholder="Телефон *"><br><br>
<input class="logInp" type="text" name="userMail" maxlength="30" placeholder="E-Mail"><br><br>
<select class="logInp" name="userDelivery">
	<option value="В отделение новой почты">Новая почта (в отделение)</option>
    <option value="Новая почта (до двери)">Новая почта (до двери)</option>
    <option value="Самовывоз">Самовывоз из магазина</option>
    </select><br><br>
<select class="logInp" name="adminCard">
	<option value="Оплата на карту Приватбанка">Оплата на карту Приватбанка</option>
    <option value="Оплата при получении">Оплата при получении</option>
    </select><br><br>
<input class="logInp" type="text" name="userCity" maxlength="13" required="required" placeholder="Город *"><br><br>
<input class="logInp" type="text" name="userPost" maxlength="13" required="required" placeholder="Отделение *"><br><br>
<textarea rows="3" name="comentAll" id="logComment" placeholder="Комментарий"></textarea><br><br>
<input type="hidden" id="dataLocalStor" name="localStorage" value="">
<div class="checkbox"><label><input type="checkbox" checked="checked" id="agree" onclick="Agreement()"> Я прочитал <a href="/AgreementView" target="_blank" id="specification">правила сервиса</a> и согласен с ними</label></div>
<div class="g-recaptcha" data-sitekey="***********" data-callback="recaptcha" style="display: flex; justify-content: center; margin-bottom: 0.5em;"></div>
<input id="logBut" name="order" type="hidden" value="Подтверждение заказа">
<input id="logBut2" name="false" type="button" value="Введите капчу"><br><br>
<a class="continue" href="/">Продолжить покупки</a>
</form>
</div>
<div class="presentBasket">
<h4>Вы заказываете:</h4><br>
</div>
</div>
</div>
</div>
<div class="topBlock"><p>СЕРВИС СЛУЧАЙНЫХ ПОДАРКОВ</p></div>
<div id="large-header" class="large-header">
<canvas id="demo-canvas"></canvas>
</div>
<div class="rowLogo">
<div class="infoHeader">
<a href="/cooperation"><div class="cooperation">Сотрудничество</div></a>
</div>
<a href="/"><div class="logo"><img alt="daribox" src="/views/image/logo.png"/>
<img class="imgGif" alt="подарки" src="/views/image/present.gif"/>
</div></a>
<div class="contactHeader">
<a href="tel:068-100-33-88">&#9742; +380 68 100 33 88</a><br><br>
<div class="social">
<a href="https://www.facebook.com/DariBox-518713435364412/"><img alt="facebook" src="/views/image/facebook.png"/></a>
<a href="https://www.instagram.com/daribox2018/"><img alt="instagram" src="/views/image/Instgram.png"/></a>
<a href="https://www.youtube.com/channel/UCNaczyIKB2vMvV9HAMhrMdg?view_as=subscriber"><img alt="youtube" src="/views/image/youtube.png"/></a>
<a href="https://vk.com/public177905732"><img alt="vk" src="/views/image/vk.png"/></a>
</div>
</div>
</div>
<nav>
 <ul class="Mnavigation">
    <li class="Mnav-item"><a class="shadow1" href="/about">О нас</a></li>
    <li class="Mnav-item"><a class="shadow2" href="/delivery">Доставка</a></li>
    <li class="Mnav-item"><a class="shadow2" href="/contacts">Контакты</a></li>
    <li class="Mnav-item"><a class="shadow4" href="/video">Видео</a></li>
</ul>
</nav>
</header> 

