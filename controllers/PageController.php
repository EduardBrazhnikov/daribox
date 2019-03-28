<?
class PageController {
	public function actionContacts() {
		include ROOT.'/views/Contacts.php';
	}
	public function actionVideo() {
		include ROOT.'/views/Video.php';
	}
	public function actionDelivery() {
		include ROOT.'/views/Delivery.php';
	}
	public function actionAbout() {
		include ROOT.'/views/About.php';
	}
	public function actionIntim() {
		$intim = Admin::getIntim();
		include ROOT.'/views/Intim.php';
	}
	public function actionMix() {
		$mix = Admin::getMix();
		include ROOT.'/views/Mix.php';
	}
	public function actionSweets() {
		$sweets = Admin::getSweet();
		include ROOT.'/views/Sweets.php';
	}
	public function actionPresent() {
		$present = Admin::getPresent();
		include ROOT.'/views/Present.php';
	}
	public function actionСooperation() {
		include ROOT.'/views/Cooperation.php';
	}
	public function actionAgreementView() {
		include ROOT.'/views/AgreementView.php';
	}
	public function actionMailingSection() {
		include ROOT.'/views/MailingSection.php';
	}
}