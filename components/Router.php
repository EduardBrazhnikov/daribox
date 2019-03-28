<?
class Router {
	private $routes;
	public function __construct() {
		$routesPath = ROOT . '/config/routes.php';
		$this->routes = include($routesPath);
		session_start(); 
	}
	private function getUri() {
		if(!empty($_SERVER['REQUEST_URI'])) {
			return trim($_SERVER['REQUEST_URI']);
		}
	}
	public function run() {
		$uri = $this->getUri();
		if ($uri == '/admin/addProduct' || $uri == '/admin' || $uri == '/out' || $uri == '/admin/addCategory' || $uri == '/admin/addNews' || $uri == '/admin/changeProduct' || $uri == '/admin/changePresent' || $uri == '/admin/changeSweet' || $uri == '/admin/changeMix' || $uri == '/admin/changeIntim' || $uri == '/admin/reviewsDel' || $uri == '/admin/confirmReviews') {
		include ROOT.'/views/layouts/adminHeader.php';
		echo '<main>';
		foreach($this->routes as $uriPattern => $path){
			if (preg_match("~$uriPattern~", $uri)){
				$internalRoute = preg_replace("~$uriPattern~", $path, $uri); 
				$segments = explode('/', $internalRoute); 
				$controllerName = array_shift($segments) . 'Controller'; 
				$controllerName = ucfirst($controllerName); 
				$actionName = 'action' . ucfirst(array_shift($segments)); 
				$controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
				$controllerObject = new $controllerName;
				$result = $controllerObject->$actionName($segments);
				break;
			}
		}
		echo '</main>';
		}
		else {
		include ROOT.'/views/layouts/header.php';
		echo '<main>';
		foreach($this->routes as $uriPattern => $path){
			if (preg_match("~$uriPattern~", $uri)){
				$internalRoute = preg_replace("~$uriPattern~", $path, $uri);
				$segments = explode('/', $internalRoute);
				$controllerName = array_shift($segments) . 'Controller';
				$controllerName = ucfirst($controllerName); 
				$actionName = 'action' . ucfirst(array_shift($segments)); 
				$controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
				$controllerObject = new $controllerName;
				$result = $controllerObject->$actionName($segments);
				break;
			}
		}
		echo '</main>';
		include ROOT.'/views/layouts/footer.php';
		}
		
	}
}