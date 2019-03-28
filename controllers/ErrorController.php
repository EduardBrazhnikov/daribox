<?
class ErrorController {
	public function actionNotfound() {
		header("HTTP/1.1 404 Not Found");
        header("Status: 404 Not Found");
        @require_once($_SERVER['DOCUMENT_ROOT'].'/views/layouts/eror404.html');
         exit();
	}
}