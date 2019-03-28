 <style type="text/css">
 @import url('assets/css/contact.css');
 @import url('assets/css/lay.css');
.style1 {color: #FFFFFF}
</style>
<div id="contact">
<div id="top">
<h1>Напишите нам</h1>
</div>
<div id="center">
<div id="contact_form">
<form method="post" action="assets/php/send.php" id="contactForm">
<div class="error" id="error">Извините, произошла ошибка!</div>
<div class="success" id="success">Спасибо, Ваше сообщение отправлено!</div>
<span class="input">
<label for="name"><b>Ваше имя:</b> </label>
<input  type="text" id="name" name="name" />
<div class="warning" id="nameError">Введите Ваше имя</div>
</span>
<span class="input">
<label for="email"><b>Ваш Email:</b> </label>
<input  type="text" id="email" name="email" />
<div class="warning" id="emailError">Введите Ваш email!</div>
</span>
<span class="input">
<label for="sales"><b>Тема:</b> </label>
<select id="sales" name="sales">
<option value="Sales">Покупка</option>
<option value="Other">Предложение по рекламе</option>
</select>
</span>
<span class="input">
<label for="message"><b>Ваше сообщение:</b> </label>
<textarea id="message" name="message">
</textarea>
<div class="warning" id="messageError">Введите сообщение</div>
</span>
<span class="input">
<label for="security_code"><b>Введите код:</b> </label>
<input class="noicon" type="text" id="security_code" name="security_code" style="width:100px" />
<img src="assets/php/security/1/sec.php" style="vertical-align:middle;" />
<div class="warning" id="security_codeError">Ошибка кода!</div>
</span>
<span id="submit" class="input">
<label for="submit"></label>
<p id="ajax_loader" style="text-align:center;"><img src="assets/img/contact/ajax-loader.gif" /></p>
<input id="send" type="submit" value="Отправить" />
</span>
</form>
</div>
</div>
<div id="bot"></div>
</div>
<div align="center"><br>
</div>