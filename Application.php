<?php
	use Controllers\HomeController;
	use Controllers\Processa2Controller;
	use Controllers\Processa3Controller;
	use Controllers\Processa4Controller;
	use Controllers\Processa7Controller;
	use Controllers\ProcessaController;
	
	define('PATH_TO_ROOT','http://localhost:8080/AmbienteTeste/mvc/');
	class Application
	{
		public function executar(){
			$url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home';
			$url = ucfirst($url);
            $page = $url;
			$url.="Controller";
			if(file_exists('Controllers/'.$url.'.php')){
				$className = "Controllers\\$url";
				$controler = new $className($page);
				$controler->executar();
			}else{
				die("Não existe esse controlador!");
			}
		}
	}
	
?>