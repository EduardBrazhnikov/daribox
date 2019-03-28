<?php
class Home {
	public static function getReviews() {
		$conn = Db::getConnection();
		$sql = "SELECT *
		FROM reviews WHERE approval=1
		ORDER BY id DESC
		LIMIT 3";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) { 
   $data[] = $row;
   }
   return $data;
	}
	} 
	public static function getLimitedEdition() {
		$conn = Db::getConnection();
		$sql = "SELECT *
		FROM limitedEdition
		ORDER BY id";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) { 
   $limited[] = $row;
   }
   return $limited;
	}
	} 
	public static function sendEmail($userName, $userSurname, $userPhone, $userMail, $userDelivery, $adminCard, $userCity, $userPost, $comentAll, $localStorage) {
		$timeBox = date("Y-m-d H:i:s");
		$to = "*************";
        $from = '***********';
        $subject = "Заказ Бокса";
		$message = 'Имя - ' . $userName . '<br>' . 'Фамилия - ' . $userSurname . '<br>' . 'Телефон: ' . $userPhone . '<br>' 
		. 'Е-Мейл - ' . $userMail . '<br>' . 'Способ доставки - ' . $userDelivery . '<br>' . 'Способ оплаты - ' . $adminCard . '<br>' 
		. 'Город - ' . $userCity . '<br>' . 'Отделение - ' . $userPost . '<br>' . 'Комментарий - ' . $comentAll . '<br>' . 'Дата заказа -' . $timeBox . '<br>' 
		. '<p style="color: red; font-size: 1.5em;">' . 'Данные заказа: ' . $localStorage . '</p>';
        $headers = "Content-type: text/html; charset=UTF-8 \r\n";
        $headers .= "From: <*****@com.ua>\r\n";
        $result = mail($to, $subject, $message, $headers);
		if ($result) {return 1;}
		else {return 0;}
	} 
}
 ?>