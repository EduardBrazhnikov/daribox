<?
 $sendM = $_POST['sendM']; 
	    $to = "**********";
        $from = '***********';
        $subject = "Заявка на отправку письма";
		$message =  '<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"><div style="font-size: 1.3em; font-family: Lobster, cursive;">' . 'Реквизиты письма: ' . '<br>' . $sendM . '<br>' . '<div>';
        $headers = "Content-type: text/html; charset=UTF-8 \r\n";
        $headers .= "From: <klient@com.ua>\r\n";
        $result = mail($to, $subject, $message, $headers);
		echo '<div margin-top: 2em; style="text-align: center; color: #008000"><h2>Оплата прошла успешно, ваше сообщение будет отправлено</h2><br><br><a href="https://daribox.com/">Вернуться на главную</a><br></div>';
?>