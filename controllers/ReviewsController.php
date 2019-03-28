<?
class ReviewsController {
	public function actionList() {
		$data = Reviews::getReviews();
		include ROOT.'/views/ReviewsView.php';
	}
	public function actionAddReviews() {
		if(isset($_POST['subRev'])){
			$reviewsName = $_POST['reviewsName'];
			$reviewsCity = $_POST['reviewsCity'];
			$reviewsText = $_POST['reviewsText'];
			if(Reviews::addReviews($reviewsName, $reviewsCity, $reviewsText)) {
				 echo "<script type='text/javascript'>alert('Ваш отзыв отправлен на модерацию')</script>";
			} else {	
				echo "<script type='text/javascript'>alert('Ошибка добавления отзыва')</script>";
				
			}
		}
		$this->actionList();
	}
}