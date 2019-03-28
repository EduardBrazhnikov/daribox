<?
class HomeController {
	public function actionIndex() {
		$data = Home::getReviews();
		$limited = Home::getLimitedEdition();
		include ROOT.'/views/HomeView.php';
	}
	public function actionOrder() {
	if(isset($_POST['g-recaptcha-response']) && $_POST['g-recaptcha-response']) {
	echo $_POST['g-recaptcha-response'];
	echo $_POST['g-recaptcha-response'];
	$secret = '**********';
	$ip = $_SERVER['REMOTE_ADDR'];
	$response = $_POST['g-recaptcha-response'];
	$rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$ip");
	$arr = json_decode($rsp, TRUE);
	if($arr['success']){
		echo "ok";
		if(isset($_POST['order'])){
			$userName = $_POST['userName'];
			$userSurname = $_POST['userSurname'];
			$userPhone = $_POST['userPhone'];
			$userMail = $_POST['userMail'];
			$userDelivery = $_POST['userDelivery'];
			$adminCard = $_POST['adminCard'];
			$userCity = $_POST['userCity'];
			$userPost = $_POST['userPost'];
			$comentAll = $_POST['comentAll'];
			$localStorage = $_POST['localStorage'];
			if(Home::sendEmail($userName, $userSurname, $userPhone, $userMail, $userDelivery, $adminCard, $userCity, $userPost, $comentAll, $localStorage)) {
				 echo "<script type='text/javascript'>document.location.href = '/'; localStorage.removeItem('card'); localStorage.removeItem('cardRound');</script>";
			} 
			else {
				echo "<script type='text/javascript'>alert('ошибка отправки заказа');</script>";
			}
		}
	}
	}
		$this->actionIndex();
	}
}
