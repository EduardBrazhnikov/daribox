<?
class AdminController {
	public function actionIndex() {
		if($_POST['adminLogin'] === '********' AND $_POST['adminPass'] === '*******') {
			$_SESSION['admin'] = '******';
			include ROOT.'/views/admin/adminView.php';
			return;
		}
		if($_SESSION['admin'] === 'admin') {			
		   $limited = Admin::getLimitedEdition();
		   $present = Admin::getPresent();
		   $sweet = Admin::getSweet();
		   $mix = Admin::getMix();
		   $intim = Admin::getIntim();
		   $data = Admin::getReviews();
			include ROOT.'/views/admin/adminView.php';
		} else {
			include ROOT.'/views/admin/adminFormView.php';
			$uri = trim($_SERVER['REQUEST_URI']);
			if ($uri == '/admin' && !empty($_POST['adminLogin'])  && !empty($_POST['adminPass'])) {
				echo "<div class='resultEnter'>Вы ввели неверные данные, попробуйте еще раз.</div>";
			}
		}
		
	}
	public function actionDelReviews() {
		if(isset($_POST['reviewsDel'])){
			$idReviews = $_POST['reviewsIdDel'];
			if(Admin::delReviewsById($idReviews)) {
				 echo "<script type='text/javascript'>alert('Отзыв был удален')</script>";
			} else {	
				echo "<script type='text/javascript'>alert('Ошибка удаления')</script>";
				
			}
		}
		$this->actionIndex();
	}
	public function actionСonfirmReviews() {
		if(isset($_POST['reviewsApprove'])){
			$idRev = $_POST['reviewsId'];
			if(Admin::confirm($idRev)) {
				 echo "<script type='text/javascript'>alert('Отзыв добавлен')</script>";
			} else {	
				echo "<script type='text/javascript'>alert('Ошибка добавления')</script>";
				
			}
		}
		$this->actionIndex();
	}
	public function actionСhangeProduct() {
		if(isset($_POST['sub2'])){
		$limName1 = $_POST['limName1'];
		$limPrice1 = $_POST['limPrice1'];
		$limName2 = $_POST['limName2'];
		$limPrice2 = $_POST['limPrice2'];
		$limName3 = $_POST['limName3'];
		$limPrice3 = $_POST['limPrice3'];
		$limName4 = $_POST['limName4'];
		$limPrice4 = $_POST['limPrice4'];
		if(Admin::СhangeProduct($limName1, $limPrice1, $limName2, $limPrice2, $limName3, $limPrice3, $limName4, $limPrice4)) {
				 echo "<script type='text/javascript'>alert('Изменения внесены')</script>";
			} else {	
				echo "<script type='text/javascript'>alert('Ошибка внесения изменений')</script>";
				
			}
		}
		$this->actionIndex();
	}
	public function actionСhangePresent() {
		if(isset($_POST['sub3'])){
		$presentName1 = $_POST['presentName1'];
		$presentPrice1 = $_POST['presentPrice1'];
		$presentName2 = $_POST['presentName2'];
		$presentPrice2 = $_POST['presentPrice2'];
		$presentName3 = $_POST['presentName3'];
		$presentPrice3 = $_POST['presentPrice3'];
		$presentName4 = $_POST['presentName4'];
		$presentPrice4  = $_POST['presentPrice4'];
		if(Admin::СhangePresent($presentName1, $presentPrice1, $presentName2, $presentPrice2, $presentName3, $presentPrice3, $presentName4, $presentPrice4)) {
				 echo "<script type='text/javascript'>alert('Изменения внесены')</script>";
			} else {	
				echo "<script type='text/javascript'>alert('Ошибка внесения изменений')</script>";
				
			}
		}
		$this->actionIndex();
	}
	public function actionСhangeSweet() {
		if(isset($_POST['sub4'])){
		$sweetName1 = $_POST['sweetName1'];
		$sweetPrice1 = $_POST['sweetPrice1'];
		$sweetName2 = $_POST['sweetName2'];
		$sweetPrice2 = $_POST['sweetPrice2'];
		$sweetName3 = $_POST['sweetName3'];
		$sweetPrice3 = $_POST['sweetPrice3'];
		$sweetName4 = $_POST['sweetName4'];
		$sweetPrice4  = $_POST['sweetPrice4'];
		if(Admin::СhangeSweet($sweetName1, $sweetPrice1, $sweetName2, $sweetPrice2, $sweetName3, $sweetPrice3, $sweetName4, $sweetPrice4)) {
				 echo "<script type='text/javascript'>alert('Изменения внесены')</script>";
			} else {	
				echo "<script type='text/javascript'>alert('Ошибка внесения изменений')</script>";
				
			}
		}
		$this->actionIndex();
	} 
	public function actionСhangeMix() {
		if(isset($_POST['sub5'])){
		$mixName1 = $_POST['mixName1'];
		$mixPrice1 = $_POST['mixPrice1'];
		$mixName2 = $_POST['mixName2'];
		$mixPrice2 = $_POST['mixPrice2'];
		$mixName3 = $_POST['mixName3'];
		$mixPrice3 = $_POST['mixPrice3'];
		$mixName4 = $_POST['mixName4'];
		$mixPrice4  = $_POST['mixPrice4'];
		if(Admin::СhangeMix($mixName1, $mixPrice1, $mixName2, $mixPrice2, $mixName3, $mixPrice3, $mixName4, $mixPrice4)) {
				 echo "<script type='text/javascript'>alert('Изменения внесены')</script>";
			} else {	
				echo "<script type='text/javascript'>alert('Ошибка внесения изменений')</script>";
				
			}
		}
		$this->actionIndex();
	} 
	public function actionСhangeIntim() {
		if(isset($_POST['sub6'])){
		$intimName1 = $_POST['intimName1'];
		$intimPrice1 = $_POST['intimPrice1'];
		$intimName2 = $_POST['intimName2'];
		$intimPrice2 = $_POST['intimPrice2'];
		$intimName3 = $_POST['intimName3'];
		$intimPrice3 = $_POST['intimPrice3'];
		$intimName4 = $_POST['intimName4'];
		$intimPrice4  = $_POST['intimPrice4'];
		if(Admin::СhangeIntim($intimName1, $intimPrice1, $intimName2, $intimPrice2, $intimName3, $intimPrice3, $intimName4, $intimPrice4)) {
				 echo "<script type='text/javascript'>alert('Изменения внесены')</script>";
			} else {	
				echo "<script type='text/javascript'>alert('Ошибка внесения изменений')</script>";
				
			}
		}
		$this->actionIndex();
	} 
	public function actionExit() {
		unset($_SESSION['admin']);
		session_destroy();
		$this->actionIndex();
	}
}
